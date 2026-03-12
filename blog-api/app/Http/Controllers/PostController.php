<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Lista todos os posts
    public function index()
    {
        return Post::all();
    }

    // Salva um post novo no banco
    public function store(Request $request)
    {
        $post = Post::create([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
        ]);

        return response()->json($post, 201);
    }
}