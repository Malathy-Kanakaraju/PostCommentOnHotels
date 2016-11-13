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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $hotels = DB::table('hotels')->selectall();
//        var_dump($hotels);
        return 'hello, here you are';
//        return view('home');
    }
    
    /**
     * Return list all hotels on home page
     * 
     */
    
}
