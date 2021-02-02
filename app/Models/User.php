<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Psy\Readline\Transient;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'parent_id'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
        'referral_link',
    ];

    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->username]);
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y', strtotime($value));    
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }


    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function assignRole($role)
    {
        if (is_string($role)) {
            $role = Role::whereName($role)->firstOrFail();
        }
        
        $this->roles()->sync($role, false);
    }

    public function abilities()
    {
        return $this->roles->map->abilities->flatten()->pluck('name')->unique();
    }

    public function role()
    {
        // dd($this->roles()->pluck('name')->isEmpty() ? true : false);
        return !$this->roles()->pluck('name')->isEmpty() ? $this->roles()->pluck('name')[0] : null ;
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function parent()
    {
        return $this->belongsTo(User::class);
    }

    public function children()
    {
        return $this->hasMany(User::class, 'parent_id');
    }

    public function mainWallet()
    {
        return $this->hasOne(MainWallet::class);
    }

    public function referralWallet()
    {
        return $this->hasOne(ReferralWallet::class);
    }

    public function deposit($amount)
    {
        return Transaction::create([
            'amount' => $amount,
            'transaction_type' => 'Deposit',
            'user_id' => auth()->id(),
        ]);
    }

    public function withdrawFromMainWallet($amount)
    {
        return DB::transaction(function () use ($amount) {
            Transaction::create([
                'user_id' => auth()->id(),
                'amount' => $amount,
                'transaction_type' => 'Withdraw from main wallet',
            ]);   
        });
    }

    public function withdrawFromReferralWallet($amount)
    {
        return DB::transaction(function () use ($amount) {
            Transaction::create([
                'user_id' => auth()->id(),
                'amount' => $amount,
                'transaction_type' => 'Withdraw from referral wallet',
            ]);
        });
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

}