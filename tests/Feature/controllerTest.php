<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\booking;
use App\Message;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MessagesController;
class controllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    
    public function testBookingTest(){
    // Event::fake();

    $request = Request::create('/booking', 'POST',[
        'email' => 'mariolycan4@gmail.com',
        'custname' => 'asd',
        'phone' => '234343',
        'location' => 'asdas',
        'bdate' => '2019-09-14',
        'timing' => '214',
        'stylist' => 'asdsad'
    ]);

    $controller = new BookingController();
    $response = $controller->createBooking($request);
    $this->assertEquals(302, $response->getStatusCode());
}

public function testBooking(){
    $this->assertCount(7, booking::all());
   }

   public function testBookingCheck(){
    $request = Request::create('/booking', 'POST',[
        'email' => 'mariolycan4@gmail.com',
        'age' => '$ss'
    ]);

    $controller = new BookingController();
    $response = $controller->submit($request);
    $this->assertEquals(302, $response->getStatusCode());
}

public function testMessages(){
    $this->assertCount(1, Message::all());
   }


   public function testMessage(){
       $email = "mariolycan4@gmail.com";
    $this->assertCount(1, Message::all());
   }

   public function testBookingSubmit(){
    $request = Request::create('/contact', 'POST',[
        'name' => 'required',
           'email' => 'required',
           'message' => 'required'
    ]);

    $controller = new MessagesController();
    $response = $controller->submit($request);
    $this->assertEquals(302, $response->getStatusCode());
}

public function testContact()
{
    $response = $this->get('/contact');

    $response->assertStatus(200);
}
}