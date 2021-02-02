<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $role = Auth::user()->role();
       

        if ($request->wantsJson()) {
            return response()->json(['two_factor' => false]);
        }

        switch($role) {
            case 'admin':
                return redirect(route('admin.dashboard'));
            case 'user':
                return redirect(route('users.dashboard'));
            default:
             return redirect('/');
        }
    }
} 