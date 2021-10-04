<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('author', [
            'user' => $user,
            'posts' => Post::with(['author','category'])->where('user_id',$user->id)->latest()->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::forUser($user)->denies('my-account')){
            abort(403);
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
    public function update(Request $request, User $user)
    {
        if(Gate::forUser($user)->denies('my-account')){
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
    public function destroy(User $user)
    {
        if(Gate::forUser($user)->denies('my-account')){
            abort(403);
        }
        $user->delete();

        return back()->with('message', 'Account deleted successfully');
    }
}
