<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
public function getData()
{
    //return view('register')->with('name','Amar');

    return view('register')->with('post','covid 19 in nepal');
}
}
