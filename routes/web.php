<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostdetailsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index'])->name('index');

Route::get('all-category',[CategoryController::class,'index'])->name('all-category');
Route::get('category',[CategoryController::class,'create'])->name('category.create')->middleware('admin');;
Route::post('category/store',[CategoryController::class,'store'])->name('category.store')->middleware('admin');;
Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update')->middleware('admin');;
Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete')->middleware('admin');;

Route::get('post-details',[PostdetailsController::class,'index'])->name('post-details');
Route::get('all-news',[NewsController::class,'index'])->name('all-post');

Route::get('post/add',[PostController::class,'create'])->name('post.create')->middleware('admin');
Route::post('post/store',[PostController::class,'store'])->name('post.store')->middleware('admin');
Route::get('post/show',[PostController::class,'show'])->name('post.show')->middleware('admin');
Route::get('post/edit/{id}',[PostController::class,'edit'])->name('post.edit')->middleware('admin');
Route::post('post/update/{id}',[PostController::class,'update'])->name('post.update')->middleware('admin');
Route::get('post/delete/{id}',[PostController::class,'delete'])->name('post.delete')->middleware('admin');
Route::post('{title}',[PostController::class,'show_detail'])->name('post.detail');

Route::get('about',[AboutController::class,'index'])->name('about');
Route::get('blog',[BlogController::class,'index'])->name('blog');
Route::get('gallery',[GalleryController::class,'index'])->name('gallery');
Route::get('contact',[ContactController::class,'index'])->name('contact');

//Register routes
Route::post('user/register',[LoginController::class,'register'])->name('user.register');
Route::post('user/login',[LoginController::class,'login'])->name('user.login');
Route::get('logout',[LoginController::class,'logout'])->name('logout');


//comment routes
Route::post('comment/store/{id}',[CommentController::class,'store'])->name('comment.store');

Route::post('subscribe/newsletter',[NewsletterController::class,'store'])->name('newsletter.store');