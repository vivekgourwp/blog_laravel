<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {   
        $posts = Post::all();
        return view('admin.posts.posts', compact('posts'));
         //return "fdsfdsf";
        
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {  
         $request->validate([
            'title' => 'required',
            'content' => 'required',
            'excerpt' => 'required|max:255', 
        ]);

        Post::create([
            'title'     => $request->title,
            'content'   => $request->content,
            'excerpt'   => $request->excerpt,
            'status'    => 'publish',
            'type'      => 'post',
            'author_id' => 2,
            'parent_id' => 1,
           
        ]);
        return redirect()->route('posts');
        
    }


}
