<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
class PostController extends Controller
{

    public function show_detail(Request $request)
    {
        // dd($request->all());
        $post = Post::where('id',$request->id)->get()->first();
        return view('post-details')->with('post',$post);
    }

    public function create(Request $request)
    {
        $categories = Category::all();
        return view('admin.post-add',compact('categories'));
    }


    public function store(Request $request)
    {
        $value = $request->all();
        $destination_path = Public_path().'/assets/img/';
        // dd($value);
        $request->validate([
            'post_upload_date' => 'required',
            'post_title' => 'required',
            'post_type' => 'required',
            // 'news_sub_title' => 'required',
            'post_description' => 'required',
            'post_category' => 'required',
            'post_image' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
        ],
        [
            'post_upload_date.required' => 'Uploading Date is Required.'
        ]
    
    );

        $filename = $request->file('post_image')->getClientOriginalName();
        $request->file('post_image')->move($destination_path,$filename);

        // dd($filename);

        $create = Post::create([
         'date' => $value['post_upload_date'],
         'type' => $value['post_type'],
         'title' => $value['post_title'],
         'sub_title' => $value['post_sub_title'],
         'category_id' => $value['post_category'],
         'description' => $value['post_description'],
         'meta_title' => $value['meta_title'],
         'meta_description' => $value['meta_description'],
         'meta_keyword' => $value['meta_keyword'],
         'image' => $filename,
        ]);

        if($create)
        {
            return redirect()->back()->with('success','Post Added Successfully');
        }
        else
        {
            return redirect()->back()->with('error','Sorry! Something went wrong Please Try Again');
        }
    }

    public function show()
    {
        $posts = Post::all();
        $i = 0;
        // dd($newses);
        return view('admin.manage-posts',compact('posts','i'));

    }

    public function edit($id)
    {
        // dd($id);
        $categories = Category::all();
        $post = Post::findOrFail($id);
        // dd($newses);
        return view('admin.post-edit',compact('post','categories'));
    }

    public function update(Request $request, $id)
    {
        $value = $request->all();
        // dd($value);
        $destination_path = Public_path().'/assets/img/';
        if($request->has('post_image'))
        {
            $filename = $request->file('post_image')->getClientOriginalName();
            $request->file('post_image')->move($destination_path,$filename);
            // dd($filename);
            $update = Post::where('id',$id)->update([
            'date' => $value['post_upload_date'],
            'type' => $value['post_type'],
            'title' => $value['post_title'],
            'sub_title' => $value['post_sub_title'],
            'category_id' => $value['post_category'],
            'description' => $value['post_description'],
            'meta_description' => $value['meta_description'],
            'meta_title' => $value['meta_title'],
            'meta_keyword' => $value['meta_keyword'],
            'image' => $filename,
            ]);
        }

        else
        {
            $update = Post::where('id', $id)->update([
                'date' => $value['post_upload_date'],
                'title' => $value['post_title'],
                'type' => $value['post_type'],
                'sub_title' => $value['post_sub_title'],
                'category_id' => $value['post_category'],
                'description' => $value['post_description'],
                'meta_description' => $value['meta_description'],
                'meta_title' => $value['meta_title'],
                'meta_keyword' => $value['meta_keyword'],
               ]);
        }
        if($update)
        {
            return redirect()->back()->with('success','Post Updated Successfully');
        }
        else
        {
            return redirect()->back()->with('error','Sorry! Something went wrong Please Try Again');
        }
    } 

    public function delete($id)
    {
        $delete = Post::where('id',$id)->delete();

        if($delete)
        {
            return redirect()->back()->with('success','Post Deleted Successfully');
        }
        else
        {
            return redirect()->back()->with('error','Sorry! Something went wrong Please Try Again');
        }
        // dd($id);
    }
}
