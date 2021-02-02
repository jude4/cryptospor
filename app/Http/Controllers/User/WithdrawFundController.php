<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WithdrawFundController extends Controller
{
    public  function __invoke()
    {
        return view('client.withdraw.index');
    }
}