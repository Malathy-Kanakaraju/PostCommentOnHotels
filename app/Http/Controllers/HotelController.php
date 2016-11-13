<?php

namespace App\Http\Controllers;

use App\Hotel;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    /*
     * Show list of all hotels
     */
    public function index(){
        
        //Fetch list of all hotels
        $hotels = Hotel::all();
        return view("hotel", compact('hotels'));
        
    }
    
    /*
     * Show the details of selected hotel
     */
    public function show(Hotel $hotel){
        
        //$hotels = Hotel::all();
        //$hotelDetails = Hotel::where('id '=> {$hotel_id})->first();
        //$hotelDetails = Hotel::find($id);
        return view('hotelDetails',compact('hotel'));
        //return view('hotel', compact('hotels','hotelDetails'));
    }
    
    /*
     * Save the posted comment
     */
    
    public function saveComment(Request $request, Hotel $hotel) 
    {
        $comment = new Comment;
        
        $comment->comment_txt = $request->comment_txt;
        
        $comment->fk_user_id = 1;
        
        $hotel->$comments()->save($comment);
        
        return back();
    }
}
