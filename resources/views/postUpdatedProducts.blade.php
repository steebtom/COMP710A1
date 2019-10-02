@extends('layouts.app') @section('content')
<?php
$product = $_GET['product'];
$price = $_GET['price'];
$id = $_GET['id'];

?>

<div class="card-body">
    <form method="POST" action="{{route('updateProduct')}}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Cut Name') }}</label>

            <div class="col-md-2">
                <input
                    id="name"
                    type="text"
                    class="form-control"
                    name="ser1"
                    value="<?php echo $product ?>"
                    autofocus="autofocus">
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
            <div class="col-md-2">
                <input
                    id="name"
                    type="text"
                    class="form-control"
                    name="ser2"
                    value="<?php echo $price ?>"
                    autofocus="autofocus">
            </div>
        </div>

        <input
            id="id"
            type="hidden"
            class="form-control"
            name="ser3"
            value="<?php echo $id ?>"
            autofocus="autofocus">

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary" name="submit">
                    Submit
                </button>

            </div>
        </div>
    </form>
</div>

@endsection