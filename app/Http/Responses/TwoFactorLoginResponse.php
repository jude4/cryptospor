<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\TwoFactorLoginResponse as TwoFactorLoginContract;

class TwoFactorLoginResponse implements TwoFactorLoginContract
{
    public function toResponse($request)
    {
        $role = Auth::user()->role();

        if ($request->wantsJson()) {
            return response('', 204);
        }

        switch($role) {
            case 'admin':
                return redirect('admin.dashboard');
            case 'users':
                return redirect('users.dashboard');
            default:
                return redirect('/');
        }
    }
}