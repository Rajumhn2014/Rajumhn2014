<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Post2Controller extends Controller
{
    public function storePost(Request $request)
    {
        dd($request->all());
        $post=new Post;  
        $post->name=$request->name;
    }
}
