<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //

    public function store(Request $request)
    {
        
        $post = Post::Create($request->toArray());
        return view('blog.show');
    }
    public function show($id)
    {   
   
        $post = Post::find($id);


        return view('blog.show')
                ->with('post',$post);
    }
}
