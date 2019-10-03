@extends('layouts.app')
@section('content') <div id = "carouselExampleControls" class = "carousel slide" data - ride = "carousel" > <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="/images/1.jpg" alt="First slide"></div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/4.jpg" alt="Second slide"></div>
            <div class="carousel-item">
                <img class="d-block w-200" src="/images/5.jpg" alt="Third slide"></div>
            </div>
            <a
                class="carousel-control-prev"
                href="#carouselExampleControls"
                role="button"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a
                class="carousel-control-next"
                href="#carouselExampleControls"
                role="button"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

        </div>

        @endsection