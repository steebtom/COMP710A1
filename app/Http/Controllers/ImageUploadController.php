<?php

  

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;

  

class ImageUploadController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUpload()

    {

        return view('imageUpload');

    }

  

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUploadPost()

    {

        request()->validate([

            'old' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'new' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'age1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'age2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'age3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

  

        $imageName1 = "Old_Customer".'.'.request()->old->getClientOriginalExtension();

        request()->old->move(public_path('images'), $imageName1);

        $imageName2 = "New_Customer".'.'.request()->new->getClientOriginalExtension();

        request()->new->move(public_path('images'), $imageName2);

        $imageName3 = "Age_Group_1".'.'.request()->age1->getClientOriginalExtension();

        request()->age1->move(public_path('images'), $imageName3);

        $imageName4 = "Age_Group_2".'.'.request()->age2->getClientOriginalExtension();

        request()->age2->move(public_path('images'), $imageName4);

        $imageName5 = "Age_Group_3".'.'.request()->age3->getClientOriginalExtension();

        request()->age3->move(public_path('images'), $imageName5);

      

        return back()

            ->with('success','Images have been successfully uploaded.');

        }




        public function videoUploadPost()

    {

        request()->validate([

            'video' => 'required||mimes:jpeg,png,jpg,gif,svg|max:10000'
        
        ]);

  

        $videoname = "video".'.'.request()->video->getClientOriginalExtension();

        request()->video->move(public_path('videos'), $videoname);



      

        return back()

            ->with('success','Video have been successfully uploaded.');

        }



}