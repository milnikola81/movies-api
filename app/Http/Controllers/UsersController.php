<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UsersPostRequest;

class UsersController extends Controller
{
    //
    public function index()
    {
        return User::all();
    }

    public function store(UsersPostRequest $request)
    {
        echo $request;
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => str_random(10)
        ]);
    }
}
