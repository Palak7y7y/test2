<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    
    public function store(Request $request)
    {
        // dd($request->all());
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribeorUpdate($request->email);
            return redirect()->route('index')->with('success', 'Thanks For Subscribe');
        }
        else
        {
            return redirect()->route('index')->with('error', 'Sorry! You have already subscribed ');
        }
       
            
    }
}
