@extends('layouts.app')


@section('content')

<div class="card-body">
@if ($message = Session::get('failure'))
<div class="alert alert-success alert-block">
<strong>{{ $message }}</strong>
</div>
@endif

@if(session('New')) < div class = "container" > <div class="row">
    <div class="newcust">
        <img
            src="/images/New_Customer.jpg"
            alt="1"
            class="img-thumbnail"
            width="200"
            height="400">
            @if(session('New')==1)
            <img
                src="/images/Age_Group_1.jpg"
                alt="Image does not exists2"
                class="img-thumbnail"
                width="200"
                height="400">
                @elseif(session('New')==2)
                <img
                    src="/images/Age_Group_2.jpg"
                    alt="Image does not exists3"
                    class="img-thumbnail"
                    width="200"
                    height="400">
                    @else(session('New')==3)
                    <img
                        src="/images/Age_Group_3.jpg"
                        alt="Image does not exists4"
                        class="img-thumbnail"
                        width="200"
                        height="400"></div>
                    @endif
</div>
</div>
</div>

<div class="container">
    @elseif(session('Old'))
    <div class="row">
        <div class="oldcust">
            <img
                src="/images/Old_Customer.jpg"
                alt="Im5"
                class="img-thumbnail"
                width="400"
                height="400">
                <img src="#" alt="">
                    @if(session('Old')==1)

                    <img
                        src="/images/Age_Group_1.jpg"
                        alt="Image does not exists6"
                        class="img-thumbnail"
                        width="400"
                        height="400">

                        @elseif(session('Old')==2)

                        <img
                            src="/images/Age_Group_2.jpg"
                            alt="Image does not exists7"
                            class="img-thumbnail"
                            width="400"
                            height="400">

                            @else(session('Old')==3)

                            <img
                                src="/images/Age_Group_3.jpg"
                                alt="Image does not exists8"
                                class="img-thumbnail"
                                width="400"
                                height="400">

                                @endif @endif
                            </div>
                        </div>
                    </div>
</div>
<div class="card-body">
    <form method="POST" action="{{route('booknow')}}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input
                    id="email"
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    name="email"
                    value="{{ old('email') }}"
                    required="required"
                    autocomplete="email"
                    autofocus="autofocus">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                <div class="col-md-6">
                    <input
                        id="name"
                        type="text"
                        class="form-control"
                        name="custname"
                        required="required"
                        autofocus="autofocus"></div>
                </div>

                <div class="form-group row">
                    <label for="Phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                    <div class="col-md-6">
                        <input
                            id="phone"
                            type="text"
                            class="form-control"
                            name="phone"
                            required="required"
                            autofocus="autofocus"></div>
                    </div>

                    <div class="form-group row">
                        <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('location') }}</label>
                        <div class="col-md-6">
                            <select name="location" required="required">
                                <option>Hamilton East</option>
                                <option>CBD</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="bookingDate" class="col-md-4 col-form-label text-md-right">{{ __('Booking Date') }}</label>
                        <div class="col-md-6">
                            <input
                                id="bdate"
                                type="date"
                                class="form-control"
                                name="bdate"
                                required="required"
                                autofocus="autofocus"></div>
                        </div>

                        <div class="form-group row">
                            <label for="timing" class="col-md-4 col-form-label text-md-right">{{ __('Booking Time') }}</label>
                            <div class="col-md-6">
                                <select name="timing" required="required">
                                    <option>10 AM</option>
                                    <option>11 AM</option>
                                    <option>1 PM</option>
                                    <option>2 PM</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="b" class="col-md-4 col-form-label text-md-right">{{ __('Stylist') }}</label>
                            <div class="col-md-6">
                                <select name="stylist" required="required">
                                    <option>Stylist 1</option>
                                    <option>Stylist 1</option>
                                </select>
                            </div>
                        </div>

                    </div>
                
            </div>
        </div>

        
    


        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary" name = "submit">
                    {{ __('Book') }}
                </button>

            
            </div>
        </div>
    </form>
</div>

@endsection


