<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller{

    public function getCreate(){
        return view('post.create');
    }

    public function postCreate(Request $data){//Guardar en la base de datos
        $p = new Post;
        $p->title = $data->input('title');
        $p->message = $data->input('message');
        $p->save();
        return redirect('/');
    }
}
