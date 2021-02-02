<?php

namespace App\Actions\Fortify;

use App\Models\MainWallet;
use App\Models\ReferralWallet;
use App\Models\Team;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
   
    
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required','string', 'max:255', 'unique:users', 'alpha_dash'],
            'country' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        return DB::transaction(function () use ($input) {
            $parent = User::whereUsername(session()->pull('parent'))->first();
            return tap(User::create([
                'name' => $input['name'],
                'username' => $input['username'],
                'email' => $input['email'],
                'parent_id' => $parent ? $parent->id : null,
                'password' => Hash::make($input['password']),
            ]), function (User $user) use ($input)  {
                $this->createTeam($user);
                $user->assignRole('user');
                $this->createUserProfile($user, $input);
                $this->createUserWallets($user);
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }

    protected function createUserProfile($user, $input)
    {
        $user->profile()->save(UserProfile::forceCreate([
           'user_id' => $user->id,
           'country' => $input['country'] 
        ]));
    }

    protected function createUserWallets($user)
    {
        // Create user main wallet
        $user->mainWallet()->save(MainWallet::forceCreate([
            'user_id' => $user->id,
        ]));

        // Create user referral wallet
        $user->referralWallet()->save(ReferralWallet::forceCreate([
            'user_id' => $user->id
        ]));
    }
}