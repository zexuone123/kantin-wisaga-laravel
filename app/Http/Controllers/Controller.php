<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // In a controller


public function login(Request $request)
{
    // Authenticate user
    $user = Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);

    if ($user) {
        Session::put('loggedin', true);
        Session::put('name', $user->name);
        Session::put('id', $user->id);

        return redirect()->route('menu');
    } else {
        return redirect()->route('login');
    }
}
}
