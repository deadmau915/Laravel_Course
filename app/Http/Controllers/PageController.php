<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        //return view('welcome')
        return view('home');
    }

    public function blog()
    {
        //database query simulation
        $posts = [
            ['id'=>1, 'title'=>'PHP', 'slug'=>'php'],
            ['id'=>2, 'title'=>'Laravel', 'slug'=>'laravel']
        ];
        return view('blog', ['posts'=>$posts]);
    }

    public function post($slug)
    {
        //database query simulation
        $post = $slug;
        return view('post', ['post'=>$post]);
    }
}