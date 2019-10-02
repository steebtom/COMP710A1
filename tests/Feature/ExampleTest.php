<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{

    

    /** @test */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    


/** @test */
    public function landingTest()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    

    /** @test */
    public function homeTest()
    {
        $response = $this->get('/home');
        $response->assertStatus(200);
    }

    
    /** @test */
    public function checklanding()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee("Bosscuts, Hamilton");
        $response->assertSee("Get your own style");
    }

      /** @test */
      public function checkGallery()
      {
          $response = $this->get('/gallery');
          $response->assertStatus(200);
      }

       /** @test */
       public function checkServices()
       {
           $response = $this->get('/services');
           $response->assertStatus(200);
       }

   /** @test */
   public function checkLogin()
   {
       $response = $this->get('/login');
       $response->assertStatus(200);
   }
      /** @test */
   public function checkBookings()
   {
       $response = $this->get('/bookingDetails');
       $response->assertStatus(200);
   }


      /** @test */
      public function checkImageUpload()
      {
          $response = $this->get('/imageUpload');
          $response->assertStatus(200);
      }

       /** @test */
       public function checkUpdateDetails()
       {
           $response = $this->get('/updatedetails');
           $response->assertStatus(200);
       }

         /** @test */
         public function checkMessages()
         {
             $response = $this->get('/messages');
             $response->assertStatus(200);
         }

  /** @test */
         public function aboutUS()
         {
             $response = $this->get('/about');
             $response->assertStatus(200);
             $response->assertSee("About Us");
             $response->assertSee("Business Card");
         }

         /** @test */
         public function services()
         {
             $response = $this->get('/service');
             $response->assertStatus(200);
             $response->assertSee("Mushroom cut");
             $response->assertSee("akhil");
         }
     
}
