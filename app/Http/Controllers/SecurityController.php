<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function register(Request $request) {
        $incomingFields = $request->validate([
            'email' => 'required',
            'login' => 'required',
            'password' => 'required'
        ]);
        return "Method register successful. Will be reported to security office.";
    }
}
