<?php

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

Route::get('/', function () {
    return view('welcome', ['news' => App\News::orderBy('id','desc')->paginate(7)]);
});

Route::get('resume', function () {
    return view('resume');
});

Route::get('music', function () {
    return view('music');
});

Route::get('video', function () {
    return view('video');
});

Route::get('photo', function () {
    return view('photo');
});

Route::get('post/{blog}', function (App\Blog $blog) {
    return view('blog.view', ['post' => $blog]);
})->name('post');

Route::resource('blog', 'BlogController');

Route::get('admin', 'Admin\IndexController');

Route::resource('admin/blog', 'Admin\BlogController');

Route::resource('admin/news', 'Admin\NewsController');

