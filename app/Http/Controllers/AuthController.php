<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:5'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'signin' => [
                'href' => 'api/v1/user/signin',
                'method' => 'POST',
                'params' => 'email, password',
            ]
        ];
        $response = [
            'msg' => 'User Created',
            'user' => $user
        ];
        return response()->json($response, 200);
    }

    public function signin(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:5'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');

        $user = [
            'email' => $email,
            'password' => $password,
            'signin' => [
                'href' => 'api/v1/user/signin',
                'method' => 'POST',
                'params' => 'email, password',
            ]
        ];

        $response = [
            'msg' => 'User signed in',
            'user' => $user
        ];

        return response()->json($response, 200);
    }
}
