@extends('layouts.app')
@section('content')
<div class = "container">
<h1>Contact</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
<div class = "form-group">
    {{Form::label('name', 'Name')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name', 'required'])}}
</div>
<div class = "form-group">
    {{Form::label('email', 'E-Mail Address')}}
    {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter E-mail', 'required'])}}
</div>
<div class = "form-group">
    {{Form::label('message', 'Message')}}
    {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter Message', 'required'])}}
</div>
<div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection