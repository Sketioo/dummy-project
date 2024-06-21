<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

//* This is the best practice for making route
Route::prefix('/api')->group(function () {
    Route::resource('/posts', PostsController::class)->only(['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::get('/custom', [PostsController::class, 'customMethod']);
    Route::get('/home', function () {
        return view('home.homepage');
    });

    Route::get('/about', function () {
        return view('home.about');
    });
});

Route::get('/', function() {
    return view('welcome');
});

// Route::get('/', 'home.homepage')->name('home.index');
// Route::get('/about', 'home.about')->name('home.about');

// Route::get('/recent-posts/{daysago?}', function ($daysAgo = 20) {
//     return "This is recent posts from $daysAgo days ago";
// });

// $posts = [
//     1 => [
//         'title' => 'Post One',
//     ],
//     2 => [
//         'title' => 'Post Two',
//     ],
// ];

// Route::prefix('/fun')->name('fun.')->group(function () use($posts) {
// //* use is for using variable from outer scope
//     Route::get('/responses', function () use ($posts) {
//         return response($posts, 200)
//             ->header('Content-type', 'aplication/json')
//             ->cookie('MY_COOKIE', 3600);
//     })->name('response');

//     Route::get('/about', function () {
//         return redirect('/about');
//     })->name('about');

//     Route::get('/named-route', function () {
//         return redirect()->route('home.index');
//     })->name('named-route');

//     Route::get('/back', function () {
//         return back();
//     })->name('back');
// });

// Route::get('/user-inputs', function(Request $request){
//     // dd($request->all());
//     // dd($request->input('name', 'martiohs'));
// });
