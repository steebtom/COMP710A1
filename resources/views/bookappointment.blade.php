@extends('layouts.app')

<div class="card-body">
                    <form method = "POST" action = "{{route('booknow')}}">
                        @csrf

<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="name" type="text" class="form-control" name="custname" required  autofocus>
                            </div>
                        </div>

                    
                        <div class="form-group row">
                            <label for="Phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('location') }}</label>
                            <div class="col-md-6">
                               <select name = "location" required>
                               <option>Hamilton East</option>
                               <option>CBD</option>
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
   

