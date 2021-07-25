<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class RegisterController extends Controller
{
    public function create(): Factory|View|Application
    {
        return view('register.create');
    }

    public function store()
    {
        User::create(
            request()?->validate([
            'name' => 'required',
            'username' => 'required|min:3',
            'email' => 'required|email',
            'password' => ['required', 'min:7', 'max:255']
        ]));
        return redirect('/');
    }
}
