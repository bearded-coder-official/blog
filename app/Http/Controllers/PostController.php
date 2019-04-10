<?php

namespace App\Http\Controllers;

class PostController
{
    public function index()
    {
        return view('posts');
    }

    public function view($slug, $id)
    {
        return view('post', [
            'id' => $id,
            'slug' => $slug
        ]);
    }
}