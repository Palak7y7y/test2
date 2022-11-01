<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class NewsController extends Controller
{
    //
    public function index()
    {
        $newses = Post::where('type',"News")->orderBy('id','desc')->paginate(5);
        // dd($newses);
        return view('news',compact('newses'));
    }
   
}
