<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;
class BlogController extends Controller
{
    public function blog()
    {
        return view('blog');
    }  
    
    public function blogStore(Request $request)
    {
        dd($request->all());
        $blog=new Blog();
        $blog->fname=$request->fname;
        $blog->lname=$request->lname;
        $blog->description=$request->description;
        $blog->image=$request->image;
        $blog->save();

        return back()->with('success','New post added');

    }

}

