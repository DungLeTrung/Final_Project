<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutUs()
    {
        return view('about_us');
    }

    public function homePage()
    {
        return view('home_page');
    }
}
