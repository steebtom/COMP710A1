@extends('layouts.app')
@section('content')
<h1>Bookings</h1>
@if(count($bookings) > 0)
@foreach($bookings as $booking)
<!--@if($booking->ageGrp == 1)
$var = "Age Group below 20";
@elseif($booking->ageGrp == 2)
$var = "Age Group above 20";
@elseif($booking->ageGrp ==3)
$var = "Senior Citizens";
@else
$var = "null";
@endif -->

<ul class = "list-group">
<br>
    <li class = "list-group-item">Booking ID : {{$booking->id}}</li>
    <li class = "list-group-item">Customer Name : {{$booking->name}}</li>
    <li class = "list-group-item">Customer Email : {{$booking->email}}</li>
    <li class = "list-group-item">Customer Phone Number : {{$booking->phone}}</li>
    <li class = "list-group-item">Location : {{$booking->location}}</li>
    <li class = "list-group-item">Booking Date : {{$booking->bookingDate}}</li>
    <li class = "list-group-item">Time Slot : {{$booking->slot}}</li>
    <li class = "list-group-item">Stylist: {{$booking->stylist}}</li>
</ul>
@endforeach
@endif
@endsection