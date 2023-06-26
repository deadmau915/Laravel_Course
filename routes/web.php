<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return view('home');
})->name('home');

Route::get('blog', function () {
    //database query simulation
    $posts = [
        ['id'=>1, 'title'=>'PHP', 'slug'=>'php'],
        ['id'=>2, 'title'=>'Laravel', 'slug'=>'laravel']
    ];
    return view('blog', ['posts'=>$posts]);
})->name('blog');

Route::get('blog/{slug}', function ($slug) {
    //database query simulation
    $post = $slug;
    return view('post', ['post'=>$post]);
})->name('post');