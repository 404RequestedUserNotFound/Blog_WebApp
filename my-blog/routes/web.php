<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/blog', [\App\Http\Controllers\BlogPostController::class, 'index']);
Route::get('/comment', [\App\Http\Controllers\CommentController::class, 'index']);

//Routes for blog.
Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);
Route::get('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'create']); 
Route::post('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'store']); 
Route::get('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'edit']); 
Route::put('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'update']); 
Route::delete('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'destroy']);

//Routes for comment.
Route::get('/comment/{comment}', [\App\Http\Controllers\CommentController::class, 'show']);
Route::get('/comment/create/post', [\App\Http\Controllers\CommentController::class, 'create']); 
Route::post('/comment/create/post', [\App\Http\Controllers\CommentController::class, 'store']); 
Route::get('/comment/{comment}/edit', [\App\Http\Controllers\CommentController::class, 'edit']); 
Route::put('/comment/{comment}/edit', [\App\Http\Controllers\CommentController::class, 'update']); 
Route::delete('/comment/{comment}', [\App\Http\Controllers\CommentController::class, 'destroy']); 


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
