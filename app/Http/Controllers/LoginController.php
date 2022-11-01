<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class LoginController extends Controller
{
    //
    public function register(Request $request)
    {
        // dd($request->all());
        $password  = md5($request->password);
        $create = Register::create([
             
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => $password,
                'role' => 'user',

        ]);
        if($create)
        {
            session()->put('user', $create->email);
            return redirect()->route('index')->with('success','succesfully Registered and logged in.');
            // return redirect()->route('index')->with('success','succesfully Registered.'); 
        }
        else
        {
            return redirect()->back()->with('error','Sorry! Something Went Wrong Please Try Again.');
        }
        
    }
    public function login( Request $request)
    {
        // dd($request->all());
        $password = md5($request->password);
        $login = Register::where('email',$request->email)->where('password',$password)->get()->first();
        // dd($login);
        if($login)
        {
            if($login->role == 'admin')
            {
                session()->put('admin','admin');
                return redirect()->route('index')->with('success','Welcome To Admin Dashboard.');
            }
            else
            {
                session()->put('user', $login->email);
                return redirect()->route('index')->with('success','succesfully logged in.');

            }
             
        }
        else
        {
            return redirect()->route('index')->with('error','Please Fill Details Correctly.');
        }
    }

    public function logout()
    {
        session()->forget('admin');
        session()->forget('user');
        return redirect()->route('index')->with('success','succesfully logged Out.');
    }
}
