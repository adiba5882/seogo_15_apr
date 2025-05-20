<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
// User pages route
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('blog_details/{blog}', [PageController::class, 'blog_details'])->name('blog.details'); 
// User pages contact route
Route::get('blog/contact', [ContactController::class, 'blog_contact'])->name('blog.contact');
Route::get('blog/contact/list', [ContactController::class, 'list'])->name('blog.contact.list')->middleware('auth');
Route::post('blog/contact/store', [ContactController::class, 'store'])->name('blog.contact.store');
Route::get('blog/contact/edit/{contact}', [ContactController::class, 'edit'])->name('blog.contact.edit')->middleware('auth');
Route::post('blog/contact/edit/{contact}', [ContactController::class, 'update'])->name('blog.contact.update')->middleware('auth');
Route::delete('blog/contact/delete/{id}', [ContactController::class, 'delete'])->name('blog.contact.delete')->middleware('auth');
Route::get('blog/contact/status/{contact}', [ContactController::class, 'updateStatus'])->name('blog.contact.status')->middleware('auth');

// User pages comment route
Route::get('blog/comment/list', [CommentController::class, 'list'])->name('blog.comment.list')->middleware('auth');
Route::post('blog/comment/store/{blog}', [CommentController::class, 'store'])->name('blog.comment.store');
Route::get('blog/comment/edit/{comment}', [CommentController::class, 'edit'])->name('blog.comment.edit')->middleware('auth');
Route::post('blog/comment/edit/{comment}', [CommentController::class, 'update'])->name('blog.comment.update')->middleware('auth');
Route::delete('blog/comment/delete/{id}', [CommentController::class, 'delete'])->name('blog.comment.delete')->middleware('auth');
Route::get('blog/comment/status/{comment}', [CommentController::class, 'updateStatus'])->name('blog.comment.status')->middleware('auth');

// Dashboard
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('contact', [DashboardController::class, 'contact'])->name('contact')->middleware('auth');
Route::get('comment', [DashboardController::class, 'comment'])->name('comment')->middleware('auth');

// Blog Dashboard
Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::get('blog/list', [BlogController::class, 'list'])->name('blog.list')->middleware('auth');
Route::post('blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('blog/edit/{blog}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('blog/update/{blog}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::delete('blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete')->middleware('auth');
Route::get('blog/status/{blog}', [BlogController::class, 'statusUpdate'])->name('blog.status')->middleware('auth');

// Category Dashboard
Route::get('categories/create', [CategoryController::class, 'create'])->middleware('auth')->name('category.create');
Route::get('categories/list', [CategoryController::class, 'list'])->middleware('auth')->name('category.list');
Route::post('category/store', [CategoryController::class, 'store'])->middleware('auth')->name('category.store');
Route::get('category/edit/{category}', [CategoryController::class, 'edit'])->middleware('auth')->name('category.edit');
Route::post('category/update/{category}', [CategoryController::class, 'update'])->middleware('auth')->name('category.update');
Route::delete('category/delete/{id}', [BlogController::class, 'delete'])->name('category.delete')->middleware('auth');
Route::get('/status/{category}', [CategoryController::class, 'statusUpdate'])->middleware('auth')->name('category.status');

// search queirry
