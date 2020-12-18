<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }
}
