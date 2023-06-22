<?php

use Illuminate\Http\Request;
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

/**
 * Route::get Consult
 * Route::post Save
 * Route::delete Delete
 * Route::put Update
 */

Route::get('/', function () {
    //return view('welcome');
    return 'Home route';
});

Route::get('blog', function () {
    return 'Publications List';
});

Route::get('blog/{slug}', function ($slug) {
    //database query simulation
    return $slug;
});

Route::get('find', function (Request $request) {
    return $request->all();
});