<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            'Mon Titre 1', 
            'Mon titre 2'
        ]; 

        return view('articles', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $posts =[ 
            1 => 'Mon titre n1',
            2 => 'Mon tritre 2'
        ]; 

        $post = $posts[$id] ?? 'y\'a rien ici';

        return view('article', [
            'post' => $post
        ]); 
    }

    public function contact()
    {
        return view('contact');
    }


}


