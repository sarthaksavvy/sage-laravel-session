<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::latest()->get();
    }

    public function store()
    {
        User::create([
            'name' => request('name'),
            'email' => request('email')
        ]);

        return redirect('/');
    }
}
