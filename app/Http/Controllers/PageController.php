<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        // $posts = Post::get(); //traer las consultas de la base de datos usando ORM(eloquent)
        // $post = Post::first(); //traer el primer registro de la base de datos
        // $post = Post::find(25); //traer el registro por id de la base de datos
        // dd($post); //mostrar en pantalla un objeto

        $posts = Post::latest()->paginate();
        return view('blog', ['posts'=>$posts]);
    }

    public function post(Post $post)
    {
        return view('post', ['post'=>$post]);
    }
}
