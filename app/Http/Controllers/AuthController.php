<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/Index', []);
    }

    public function auth(Request $request)
    {
        $data = $request->validate(['email' => 'required|email', 'password' => 'required']);
        dd($data);
    }
}
