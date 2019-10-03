@extends('layouts.app') @section('content')
<br>
<br>

<div class="container">
    <h2 class="aboutus-title">Cuts</h2>
    <div class="row">

        @if(count($cuts) > 0) @foreach($cuts as $cut)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="{{$cut->images}}" class="card-img-top" alt="...">
                <div class="card-body " style="background-color:#E2F5ED">
                    <h5 class="card-title">{{$cut->Cuts}}</h5>
                    <p class="card-text">{{$cut->price}}</p>
                    <p class="card-text">Average Time: 40 mins</p>
                    <p class="card-text">Stylist: Peter</p>

                </div>
            </div>
            <br>
            <br>
        </div>
        @endforeach @endif

    </div>

</div>

<div class="container">
    <h2 class="aboutus-title">Products</h2>
    <div class="row">

        @if(count($products) > 0) @foreach($products as $product)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="{{$product->images}}" class="card-img-top" alt="...">
                <div class="card-body " style="background-color:#7DDFA7">
                    <h5 class="card-title">{{$product->products}}</h5>
                    <p class="card-text">{{$product->price}}</p>
                    <p class="card-text">Average Time: 40 mins</p>
                    <p class="card-text">Stylist: Albert</p>

                </div>
            </div>
            <br>
            <br>
        </div>
        @endforeach @endif

    </div>

</div>

<div class="container">
    <h2 class="aboutus-title">Other Services</h2>
    <div class="row">

        @if(count($other) > 0) @foreach($other as $service)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="{{$service->images}}" class="card-img-top" alt="...">
                <div class="card-body " style="background-color:#C9F381">
                    <h5 class="card-title">{{$service->other_services}}</h5>
                    <p class="card-text">{{$service->price}}</p>
                    <p class="card-text">Average Time: 40 mins</p>
                    <p class="card-text">Stylist: Peter</p>

                </div>
            </div>
            <br>
            <br>
        </div>
        @endforeach @endif

    </div>

</div>

@endsection