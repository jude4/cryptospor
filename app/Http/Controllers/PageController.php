<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function events()
    {
        return view('pages.events.index');
    }

    public function frequentlyAskedQuestions()
    {
        return view('pages.faq');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }
}