<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->get('id');
        $content = $request->validate(['content'=>'required']);
        if($request->get('type') == 'post'){
            $model = Post::find($id);
        }else{
            $model = User::find($id);
        }
        $model->comments()->create(['user_id' => auth()->id()] + $content);

        return back()->with('message','Comment created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back()->with('message','Comment deleted successfully');
    }
}
