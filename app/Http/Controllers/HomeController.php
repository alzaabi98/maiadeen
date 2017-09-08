<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icons = collect([
            'design-icon', 'math-icon', 'mgmt-icon', 'prog-icon',
            'design-icon', 'math-icon', 'mgmt-icon', 'prog-icon',
            'design-icon', 'math-icon', 'mgmt-icon', 'prog-icon'
        ]);

        
        return view('home',compact('icons'));
    }
}
