<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterUserRequest $request)
    {
        $attributes = $request->validated();

        $user = User::create($attributes);

        Auth::login($user);

        $request->session()->regenerate();
        
        return redirect()->route('home')->with('message','Successfully created account.');
    }
}
