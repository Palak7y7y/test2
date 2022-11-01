<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    //
    public function store(Request $request,$id)
    {
        // dd($request->all()); 
        $create = Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'post_id' => $id,

        ]);
        if($create)
        {
            return redirect()->route('index')->with('success','Comment Posted');
        }
        else
        {
            return redirect()->route('index')->with('error','Sorry! Something Went Wrong Please Try Again');
        }
    }
}
