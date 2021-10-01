<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        $request->login();

        $request->session()->regenerate();

        if(auth()->user()->is_admin){
            return redirect()->route('admin.dashboard')->with('message','Welcome Back!');
        }
        
        return redirect()->route('home')->with('message','Welcome Back '.auth()->user()->username.'!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        return redirect()->route('home')->with('message','Logged out successfully');
    }
}
