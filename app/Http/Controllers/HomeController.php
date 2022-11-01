<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    //
    public function index()
    {
        $trending_news = Post::where('type','News')->orderBy('id','desc')->get()->first();
        $i=0;
        $categories = Category::get()->take(4);
        // dd($categories);
        $blogs  = Post::where('type','Blog')->orderBy('id','desc')->paginate(5);
        $articles  = Post::where('type','Article')->orderBy('id','desc')->paginate(5);
        return view('index',compact( 'trending_news' ,
        'categories','blogs','articles','i'));
    }
}
