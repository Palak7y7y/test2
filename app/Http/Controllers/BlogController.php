<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class BlogController extends Controller
{
    //
    public function index()
    {
        $cat = Category::orderBy('id','desc')->get()->first();
        $slider_blogs = Post::orderBy('id','desc')->where('type','Blog')->where('category_id',$cat->id)->get()->take(3);
        $category2 = Category::get()->take(2);
        // dd($slider_blogs);
        return view('blog',compact('slider_blogs','category2','cat'));
    }
}
