<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Controllers\RegisterController\Route;
use App\Http\Controllers\Post2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\JhiguController;
use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tribunal', function () {
    return view('tribunal');
});

Route::get('/finance', function () {
    return view('finance');
});

Route::get('/nav', function () {
    return view('nav');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/matter', function () {
    return view('matter');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/post2', function () {
    return view('post2');
});


Route::get('/jhigu', function () {
    return view('jhigu');
});


 Route::get('/news', function () {
    return view('news');
 });


//Route::get('/blog', function () {
//    return view('blog');
//});

Route::get('/blog',[BlogController::class,'blog']);

Route::get('/post', function () {
    return view('post',['name'=>'Raju, Hari, Gita']);
});

Route::post('post-store',[Post2Controller::class,'storePost'])->name('post-store');

Route::post('/news-store',[NewsController::class,'newsStore'])->name('news-store');

Route::resource('student',StudentController::class);




