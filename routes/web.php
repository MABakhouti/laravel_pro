<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\CategoryController;
use App\Models\Categories;

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

Route::get('/post/categories/{categories_id}', [PostController::class, 'showByCategory']);

Route::get('/post/markAsFeatured/{post_id}', [PostController::class, 'markAsFeatured']);

Route::post('/comment/store', [CommentController::class, 'store']);
Route::post('/comment/reply/add/', [ReplyController::class, 'addReply']);

Route::get('/admin/post/add', [PostController::class, 'add']);
Route::get('/admin/post/edit/{id}', [PostController::class, 'edit']);
Route::patch('admin/post/update/{id}', [PostController::class, 'update']);
Route::get('admin/post/delete/{id}', [PostController::class, 'delete']);
Route::post('/admin/post/store', [PostController::class, 'store']);
Route::get('/admin/post', [PostController::class, 'adminIndex']);

Route::get('/admin/categories', [CategoryController::class, 'index']);
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit']);
Route::patch('admin/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/admin/category/add', [CategoryController::class, 'add']);
Route::post('/admin/category/store', [CategoryController::class, 'store']);