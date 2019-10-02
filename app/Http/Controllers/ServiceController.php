<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prices;
use App\products;
use App\services;

class ServiceController extends Controller
{
public function getServices(){
    $cuts = Prices::all();
        $products = products::all();
        $other = services::all();

    return view('services')->with('cuts',$cuts)
        ->with('products',$products)
        ->with('other',$other);   
}

public function showServices(){
        $cuts = Prices::all();
            $products = products::all();
            $other = services::all();

        return view('updatedetails')->with('cuts',$cuts)
            ->with('products',$products)
            ->with('other',$other);  
}

public function submit(Request $request){
    $this->validate($request, [
        'ser1' => 'required',
        'ser2' => 'required',
        'ser3' => 'required',
    ]);


    //Create new Message

    $style = $request->input('ser1');
    $price = $request->input('ser2');
    $id = $request->input('ser3');

    $booking1 = Prices::where('id',$id)
    ->update(['Cuts' => $style, 'price' => $price]);
                

    return redirect('/updatedetails')->with('updatesuccess', 'Record Updated');
    }


    public function product(Request $request){
        $this->validate($request, [
            'ser1' => 'required',
            'ser2' => 'required',
            'ser3' => 'required',
        ]);
    
    
        //Create new Message
    
        $product = $request->input('ser1');
        $price = $request->input('ser2');
        $id = $request->input('ser3');

        $booking1 = products::where('id',$id)
        ->update(['products' => $product, 'price' => $price]);
                    
    
        return redirect('/updatedetails')->with('updatesuccess', 'Record Updated');
        }

        public function service(Request $request){
            $this->validate($request, [
                'ser1' => 'required',
                'ser2' => 'required',
                'ser3' => 'required',
            ]);
        
        
            //Create new Message
        
            $service = $request->input('ser1');
            $price = $request->input('ser2');
            $id = $request->input('ser3');
    
            $booking1 = services::where('id',$id)
            ->update(['other_services' => $service, 'price' => $price]);
                        
        
            return redirect('/updatedetails')->with('updatesuccess', 'Record Updated');
            }

}
