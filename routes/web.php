<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;
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

Route::get('post/create', function () {
    DB::table("post")->insert([
        'title' => 'TITLE',
        'body' => 'BODY', 
    ]);
});
Route::get('post', [BlogController::class,"index"]);
Route::get('post/create2', function() {
    return view('blog.index'); 
});
Route::post('blog/index',[BlogController::class,'store'])->name('add-blog');
Route::get('post/{id}',[BlogController::class,'get_client']);
Route::get('/adam','App\Http\Controllers\EmployeeController@index');
Route::post('/addImage','App\Http\Controllers\EmployeeController@store')->name('addImage');
Route::get('mail/send','App\Http\Controllers\MailController@send');
Route::get('/home/{lang}', function($lang){
    App::setlocale($lang);
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});