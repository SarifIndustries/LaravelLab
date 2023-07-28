<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SecurityController;


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
    return view('welcome');
});

Route::get('/palisade', function () {
    $posts = [];
    # $posts = Post::where('user_id', auth()->id())->get();
    if (auth()->check()) {
        $posts = auth()->user()->userPosts()->latest()->get();
    }
    return view('palisade', ['posts' => $posts]);
});

Route::get('/authorize', function () {
    return view('authorize');
});


# User
Route::post('/register', [SecurityController::class, 'register']);
Route::post('/login', [SecurityController::class, 'login']);
Route::post('/logout', [SecurityController::class, 'logout']);

# Blogposts
Route::post('/create-post', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'showEditPostScreen']);
Route::put('/edit-post/{post}', [PostController::class, 'updatePost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);
