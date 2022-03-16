<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Http\Livewire\AboutPage::class);
Route::get('/blog', \App\Http\Livewire\BlogPage::class);

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', fn ()  => view('dashboard'))->name('dashboard');
    Route::get('/blog-posts', \App\Http\Livewire\Admin\BlogPosts::class)->name('admin_blog');
    Route::get('/blog-posts/{id}', \App\Http\Livewire\Admin\BlogPostForm::class)->name('admin_blog_edit');
});

require __DIR__.'/auth.php';
