@extends('layouts.app')
@section('content')
<div class="card-body">
                    <form method = "POST" action = "{{route('booknow')}}">
                        @csrf

<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Service 1') }}</label>

                            <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="ser1" required  autofocus>
                            </div>
                        </div>


                        
<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Service 2') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="ser2" required  autofocus>
                            </div>
                        </div>

    <!-- <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Service 3') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="ser3" required  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Service 4') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="ser4" required  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Service 5') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="ser5" required  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Service 6') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="ser6" required  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Service 7') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="ser7" required  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Service 8') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="ser8" required  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Service 9') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="ser9" required  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Service 10') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="ser10" required  autofocus>
                                </div>
                            </div>
                        
                        



                        </div>
                                    
                                </div>
                            </div> -->

                        
                     


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