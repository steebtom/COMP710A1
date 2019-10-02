<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function updateDetails(Request $request){

    
    $this->validate($request, [
        'ser1' => 'required',
        'ser2' => 'required',      
    ]);


    $bdate = $request->input('bdate');
    $slot = $request->input('timing');
    $stylist = $request->input('stylist');

    $booking = new booking;

    $booking1 = booking::where([['bookingDate',$bdate],['slot',$slot],['stylist',$stylist]])->first();

    if(!$booking1)        
    {
        $booking->email = $request->input('email');
        $booking->name = $request->input('custname');
        $booking->phone = $request->input('phone');
        $booking->location = $request->input('location');
        $booking->bookingDate = $request->input('bdate');
        $booking->slot = $request->input('timing');
        $booking->stylist = $request->input('stylist');
        $booking->save();
        return redirect('/book')->with('success', 'Booking Successfull');
    }

    else{
        return back()
        ->with('failure', 'Stylist not avaliable at this time slot ! Try another stylist or different time slot');
    }

    }
}
