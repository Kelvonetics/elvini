<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actions\IndexAction;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('microsoft');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('home');
    }
    
    public function about()
    {        
        return view('about');
    }
    
    public function services()
    {        
        return view('services');
    }
    
    public function projects()
    {        
        return view('projects');
    }
    
    public function contact_us()
    {        
        return view('contact-us');
    }
}

