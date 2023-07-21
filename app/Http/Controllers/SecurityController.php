<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SecurityController extends Controller
{
    public function register(Request $request) {
        $incomingFields = $request->validate([
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'login' => ['required', 'min:3', 'max:12', Rule::unique('users', 'name')],
            'password' => ['required', 'min:8', 'max:20']
        ]);
        # password hash
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $incomingFields['name'] = $incomingFields['login'];
        # create db row
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/palisade');
    }
}
