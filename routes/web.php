<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

// Route Client

// Route::get('/', function () {
//     return view('client.index');
// });
Route::get('/', [HomeController::class, 'index']);

Route::get('/article/{id}', [HomeController::class, 'showAllArticle'])->name('client.article');

Route::get('/single-article/{id}', [HomeController::class, 'showArticle'])->name('client.single-article');


// Route::get('/single-article/{id}', function ( $id ) {
//     return view('client.single-article', compact('id') );
// })->name('client.single-article');

// Route::get('/contact', function () {
//     return view('client.contact');
// });
// Route::get('/about', function () {
//     return view('client.about');
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin
Route::middleware(['auth', 'admin.user'])->prefix('admin')->group(function () {
    // Trang chu 
    Route::get('/', function () {
        return view('admin.index');
    });
    // route cho bai viet
    Route::resource('articles', ArticleController::class);

    // route cho nguoi dung
    Route::resource('users', UserController::class);

    // route cho danh muc
    Route::resource('categories', CategoryController::class);

    // rotue cho binh luan 
    Route::resource('comments', CommentController::class);

});

