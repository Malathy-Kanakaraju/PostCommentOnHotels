<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /*
     * List all hotels and allow admin to create a new hotel
     */
    public function index(){
        
        //Fetch list of all hotels
        $hotels = Hotel::all();
        return view("admin.index", compact('hotels'));
        
    }
}
