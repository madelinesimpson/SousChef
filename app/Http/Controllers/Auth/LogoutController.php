<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Request;
use Auth;
use function redirect;


class LogoutController extends Controller
{
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}

