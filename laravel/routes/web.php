<?php

use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TagController;
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

Route::group(['prefix' => '/'], function (){
    Route::get('/',[FrontController::class,'home'])->name('home');
    Route::get('/about',[FrontController::class,'about'])->name('about');
    Route::get('/contact',[FrontController::class,'contact'])->name('contact');
});
Route::group(['prefix' => 'admin', 'namespace' => 'admin','middleware' => 'auth'], function (){
    Route::get('/dashboard', [IndexController::class, 'index'])->name('admin.index');
    Route::get('/article', [IndexController::class, 'article'])->name('admin.article');
    Route::get('/category', [IndexController::class, 'category'])->name('admin.category');
    Route::get('/tag', [IndexController::class, 'tag'])->name('admin.tag');

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/{category}/', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/{category}', [CategoryController::class,'destroy'])->name('category.destroy');
    });
    Route::group(['prefix' => 'tag'], function () {
        Route::get('/create', [TagController::class, 'create'])->name('tag.create');
        Route::post('/', [TagController::class, 'store'])->name('tag.store');
        Route::get('/{tag}/edit', [TagController::class, 'edit'])->name('tag.edit');
        Route::put('/{tag}/', [TagController::class, 'update'])->name('tag.update');
        Route::delete('/{tag}', [TagController::class,'destroy'])->name('tag.destroy');
    });
    Route::group(['prefix' => 'article'], function () {
        Route::get('/create', [ArticleController::class, 'create'])->name('article.create');
        Route::post('/', [ArticleController::class, 'store'])->name('article.store');
        Route::get('/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
        Route::put('/{article}/', [ArticleController::class, 'update'])->name('article.update');
        Route::delete('/{article}', [ArticleController::class,'destroy'])->name('article.destroy');
    });
});
Auth::routes();

Route::get('/product', [App\Http\Controllers\HomeController::class, 'index'])->name('product');
