<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user = User::where('username', $username)->first();
        return view('author', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
    {
        $user = User::where('username', $username)->first();
        if($user?->id !== auth()->id()){
            abort(403,'You don\'t have permission to edit this user');
        }
        return view('user-edit', [
            'user' => auth()->user(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $username)
    {
        $user = User::where('username', $username)->first();

        if($user->id !== auth()->id()){
            abort(403);
        }
        $attributes = $request->validate([
            'image' => 'nullable|mimes:jpg,png,jpeg|max:2048',
            'username' => ['required', Rule::unique('users','username')->ignore($user->id)],
            'description' => 'nullable'
        ]);
        if($user->username_changed_at < now()->subDays(7)){
            if($attributes['username'] !== $user->username){
                $attributes['username_changed_at'] = now();
            }
        }
        
        if(isset($request->image)){
            $attributes['image'] = $request->file('image')->store('public/profiles/');
            if($user->image){
                Storage::delete($user->image);
            }
        }
        $user->update($attributes);

        return back()->with('message','Profile edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($username)
    {
        $user = User::where('username', $username)->first();
        if($user->id !== auth()->id()){
            abort(403);
        }
        $user->delete();

        return redirect()->route('home')->with('message', 'Account deleted successfully');
    }
}
