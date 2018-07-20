<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class ToppageController extends Controller
{
     public function index()
    {
        $data = [];
        if (\Auth::check())
        {
            $user = \Auth::user();
            $posts = Post::orderBy('created_at', 'desc')->get()->take(10);
          
            $data = [
                'user' => $user,
                'posts' => $posts,
                'keyword'=>null,
               
            ];
             return view('toppage', $data);
        }
        else
        {
            return view('welcome');
        }
    }
}