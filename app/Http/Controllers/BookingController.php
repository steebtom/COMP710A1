<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\booking;

class BookingController extends Controller
{
  
    public function submit(Request $request)
    {
        $this->validate($request, [
            'age' => 'required',
            'email' => 'required'
        ]);
 
 
     $email = $request->input('email');
     $age = $request->input('age');
     $booking = new booking;
          $booking1 = booking::where('email',$email)->First();
          if($booking1){
            return redirect('/booking/create')->with('Old', $age);
          }
          else{
            return redirect('/booking/create')->with('New', $age);
          }
   

    }




public function createBooking(Request $request){
  
        $this->validate($request, [
            'email' => 'required',
            'custname' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'bdate' => 'required',
            'timing' => 'required',
            'stylist' => 'required'
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
     return redirect('/')->with('bookingsuccess', 'Booking Successfull');
    }

    else{
        return back()
        ->with('failure', 'Stylist not avaliable at this time slot ! Try another stylist or different time slot');
    }
}


public function success(){
    return redirect()->route('app2');
}

public function bookingCreate(){
    return redirect()->route('app2');
}

       public function getCheck(){
        return view('check');
    }


    public function getBookingpage(){
        return view('bookappointment');
    }

    public function bookredirect(){
        return view('booking');
    }




    public function getBookingEmail(){
        $bookings = booking::all();
        return view('viewBooking')->with('bookings', $bookings);
    }


    
    public function store(Request $request)
    {
        
    }

    
  
    public function show($id)
    {
     
    }

    
    public function edit()
    {
        return view('about');
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        
    }
}
