<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create']]);
    }
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {
        return view('admin.all-posts',[
            'posts' => Post::withTrashed()->with(['author','category'])->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!auth()->user()->can_post){
            abort(403,'You are not allowed to create a new post');
        }
        return view('post.create',[
            'categories' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $prefix = time();
        if($request->hasfile('gallery'))
        {
            foreach($request->file('gallery') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->storeAs('public/'.$prefix, $name);  
                $gallery[] = $prefix.'/'.$name;  
            }
        }
        $attributes = $request->validated();
        $attributes['background_image'] = $request->file('background_image')->storeAs('public/'.$prefix, $file->getClientOriginalName());
        $attributes['gallery'] = serialize($gallery);
        $attributes['tags'] = serialize($attributes['tags']);
        $attributes['slug'] = Str::slug($request->title);

        $request->user()->posts()->create($attributes);

        return back()->with('message','Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug)
    {
        $post = Post::with('comments','author')->where('id', $id)->where('slug', $slug)->with('category','author')->first();
        $categories = Category::inRandomOrder()->take(5)->get();
        return view('post.post-single',[
            'post' => $post,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::withTrashed()->find($id)->forceDelete();
        return back()->with('message','Post deleted successfully');
    }

    public function changeStatus($id)
    {
        $post = Post::withTrashed()->find($id);

        if($post->deleted_at){
            $post->restore();
        }else{
            $post->delete();
        }
        return back()->with('message','Status changed successfully');
    }
}
