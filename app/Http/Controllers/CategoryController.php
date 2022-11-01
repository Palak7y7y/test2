<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('all-category');
    }
    
    public function create()
    {
        $categories = Category::all();
        $i = 0;
        return view('admin.category',compact('categories','i'));
    }

    public function store(Request $request)
    {
        $value = $request->all();
        $destination_path = Public_path().'/assets/img/category';
        // dd($value);
        $filename = $request->file('category_picture')->getClientOriginalName();
        $move = $request->file('category_picture')->move($destination_path,$filename);
          
        if($move)
        {
            $create  = Category::create([

                'name' => $value['category_name'],
                'picture' => $filename,
                ]);
        }
    
        if($create)
        {
            // Log::alert('category Added successfully');
            return redirect()->back()->with('success','Category Added Successfully');
        }
        else
        {
            return redirect()->back()->with('error', 'Sorry! Something Went Wrong Please Try Again Later');
        }
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        $value = $request->all();
        $destination_path = Public_path().'assets/img/category';

        if($request->has('category_picture'))
        {
            $filename = $request->file('category_picture')->getClientOriginalName();
            $move = $request->file('category_picture')->move($destination_path,$filename);
            if($move)
            {
                $update  = Category::where('id',$id)->update([
    
                    'name' => $value['category_name'],
                    'picture' => $filename,
        
                    ]);
            }
        
        }
        else
        {
            $update  = Category::where('id',$id)->update([
                'name' => $value['category_name'],
                ]);

        }
        // dd($value);
        if($update)
        {
            // Log::alert('category Added successfully');
            return redirect()->back()->with('success','Category Updated Successfully');
        }
        else
        {
            return redirect()->back()->with('error', 'Sorry! Something Went Wrong Please Try Again Later');
        }
    }

    public function delete($id)
    {
        // dd($id);

        $delete  = Category::where('id',$id)->delete();
    
    // dd($value);
    if($delete)
    {
        // Log::alert('category Added successfully');
        return redirect()->back()->with('success','Category deleted Successfully');
    }
    else
    {
        return redirect()->back()->with('error', 'Sorry! Something Went Wrong Please Try Again Later');
    }
    }

}
