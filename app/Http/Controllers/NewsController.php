<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;


class NewsController extends Controller
{
    public function newsStore(Request $request)
    {        
        //dd($request->all());
        
        $this->validate($request,[
            'fname'=>'required',
            'description'=>'required',
        ]);
               
        $result=new news();              
        $result->fname=$request->fname;
        $result->description=$request->description;
        $result->file=$request->file;
        $result->save();

        return back()->with ('success', 'Thank you ! Records are added successfully');
    }
}





