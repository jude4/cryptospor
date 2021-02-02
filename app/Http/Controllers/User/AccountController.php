<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __invoke()
    {
        $user = User::findOrFail(auth()->id());
        return view('client.account.index', compact('user'));   
    }
}