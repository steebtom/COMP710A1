@extends('layouts.app') @section('content')
<br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('navigation1')}}">
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

                            <div class="form-check">
                                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                <label for="email" class="form-label">{{ __('Age Group') }}</label>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="age"
                                    value="1"
                                    required="required">
                                <label class="form-check-label" for="remember">
                                    {{ __('Under 20 years') }}
                                </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input class="form-check-input" type="radio" name="age" value="2">
                                <label class="form-check-label" for="remember">
                                    {{ __('Above 20 years') }}
                                </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input class="form-check-input" type="radio" name="age" value="3">
                                <label class="form-check-label" for="remember">
                                    {{ __('Sernior Citizens') }}
                                </label>

                            </div>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" name="submit">
                                    {{ __('Verify') }}
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br>
@endsection