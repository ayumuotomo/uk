<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToppageController extends Controller
{
     public function index()
    {
        $data = [];
        if (\Auth::check())
        {
            $user = \Auth::user();
           
            $data = [
                'user' => $user,
               
            ];
             return view('toppage', $data);
        }
        else
        {
            return view('welcome');
        }
    }
}
