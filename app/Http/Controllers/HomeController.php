<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller{


    public function getIndex(){
        $post = Post::orderBy('created_at', 'desc')->get(); //Todos los post de la BD ordenados por la fecha de creacion

        return view('home', array('posts' => $post));//paso los post en el array posts
    }
}
