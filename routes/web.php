<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReplyController;

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

Route::get('/', [PostController::class, 'index']);

Route::get('/post/details/{id}', [PostController::class, 'show']);

Route::post('/comment/store', [CommentController::class, 'store']);
Route::post('/comment/reply/add/', [ReplyController::class, 'addReply']);

Route::get('/admin/post/add', [PostController::class, 'add']);
Route::get('/admin/post/edit/{id}', [PostController::class, 'edit']);
Route::patch('admin/post/update/{id}', [PostController::class, 'update']);
Route::get('admin/post/delete/{id}', [PostController::class, 'delete']);
Route::post('/admin/post/store', [PostController::class, 'store']);
Route::get('/admin/post', [PostController::class, 'adminIndex']);