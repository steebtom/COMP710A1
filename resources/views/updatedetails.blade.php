@extends('layouts.app')
@section('content')
@if ($message = Session::get('updatesuccess'))
<div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="container">
    <h2 class="aboutus-title">Cuts</h2>
    <div class="row">

        @if(count($cuts) > 0) @foreach($cuts as $cut)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body " style="background-color:#E2F5ED">
                    <h5 class="card-title">{{$cut->Cuts}}</h5>
                    <p class="card-text">{{$cut->price}}</p>

                    <button type="submit" name="submit">
                        <a
                            href="/postUpdatedDetails?style={{$cut->Cuts}}&price={{$cut->price}}&id={{$cut->id}}">Edit</a>
                    </button>

                </div>
            </div>
            <br>
                <br></div>
                @endforeach @endif

    </div>
</div>

<div class="container">
<h2 class="aboutus-title">Products</h2>
  <div class="row">   
  @if(count($products) > 0)
    @foreach($products as $product)
      <div class="col-sm">
          <div class="card" style="width: 18rem;">
              <div class="card-body " style="background-color:#E2F5ED">
                  <h5 class="card-title">{{$product->products}}</h5>
                  <p class="card-text">{{$product->price}}</p>

                  <button type="submit" name="submit">
                      <a
                          href="/postUpdatedProducts?product={{$product->products}}&price={{$product->price}}&id={{$product->id}}">Edit</a>
                  </button>

              </div>
          </div>
          <br>
              <br></div>
    @endforeach
  @endif
  </div>   
</div>


<div class="container">
<h2 class="aboutus-title">Other Services</h2>
  <div class="row">

    
@if(count($other) > 0)
  @foreach($other as $others)
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
        <div class="card-body " style="background-color:#E2F5ED">
            <h5 class="card-title">{{$others->other_services}}</h5>
            <p class="card-text">{{$others->price}}</p>

            <button type="submit" name="submit">
                <a
                    href="/postUpdatedServices?service={{$others->other_services}}&price={{$others->price}}&id={{$others->id}}">Edit</a>
            </button>

        </div>
    </div>
    <br>
        <br></div>
  @endforeach
@endif
        
   
  </div> 








@endsection