<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        // return response()->json([
        //     "nome" => "Vincenzo",
        //     "cognome" => "Vitello"
        // ]);
        $posts = Post::all();
        return response()->json($posts);
    }
}
