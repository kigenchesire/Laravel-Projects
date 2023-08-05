<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  

    $userPost = Post::where('user_id',auth()->id());
     
    
    $posts = Post:: all();
    return view('home', ['posts' => $posts,'userPost' => $userPost]);

});
Route::post('/register',[UserController::class, 'register']);

Route::post('/logout',[UserController::class, 'logout']);
Route::post('/login',[UserController::class, 'login']);
Route::post('/create-posts',[PostsController::class, 'createPosts']);

