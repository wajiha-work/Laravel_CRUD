<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function AboutUs()
    {
        return view('about');
    }
}
