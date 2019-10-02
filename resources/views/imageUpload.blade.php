@extends('layouts.app') @section('content')
<div class="container">

    <div class="panel panel-primary">

        <div class="panel-body">

            @if ($message = Session::get('success'))

            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>

            @endif @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong>
                There were some problems with your input.

                <ul>
                    @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                    @endforeach
                </ul>

            </div>

            @endif

            <form
                action="{{ route('moveImage') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <div class="form-group row">
                        <label for="bookingDate" class="col-md-4 col-form-label text-md-right">{{ __('New Customer') }}</label>

                        <div class="col-md-6">

                            <input type="file" accept=".jpg" name="old" class="form-control">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group row">
                        <label for="bookingDate" class="col-md-4 col-form-label text-md-right">{{ __('Old Customer') }}</label>
                        <div class="col-md-6">

                            <input type="file" accept=".jpg" name="new" class="form-control">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group row">
                        <label for="bookingDate" class="col-md-4 col-form-label text-md-right">{{ __('Age Group 1') }}</label>
                        <div class="col-md-6">

                            <input type="file" accept=".jpg" name="age1" class="form-control">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group row">
                        <label for="bookingDate" class="col-md-4 col-form-label text-md-right">{{ __('Age Group 2') }}</label>
                        <div class="col-md-6">

                            <input type="file" accept=".jpg" name="age2" class="form-control">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group row">
                        <label for="bookingDate" class="col-md-4 col-form-label text-md-right">{{ __('Age Group 3') }}</label>
                        <div class="col-md-6">

                            <input type="file" accept=".jpg" name="age3" class="form-control">
                        </div>

                    </div>
                </div>

                <div class="col-md-6">

                    <button type="submit" class="btn btn-success">Upload</button>

                </div>
            </form>

        </div>

    </div>

</div>

@endsection