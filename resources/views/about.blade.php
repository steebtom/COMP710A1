@extends('layouts.app')

@section('content') <link href = 'https://fonts.googleapis.com/css?family=Roboto' rel = 'stylesheet' > <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-9">
            <video controls="controls" autoplay="autoplay" width="600" height="400">
                <source src="videos/video.mp4" type="video/mp4"></video>
            </div>
        </div>
    </div>
    <br>
        <br>
            <div class="aboutus-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="aboutus">
                                <h2 class="aboutus-title">About Us</h2>
                                <p class="aboutus-text">We offer full-service mens grooming whether you’re
                                    fashion-forward or just want to keep things tidy. Our highly trained barbers
                                    will help you decide the service that best suits your needs, plus we can make
                                    recommendations based on your face shape and hair type if you want to mix it up
                                    from your usual style.</p>
                                <p class="aboutus-text">We deliver traditional straight razor hot shaves, using
                                    hot towels and essential oils with handsome results.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="aboutus-banner">
                                <img src="" alt=""></div>
                            </div>
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="feature">
                                    <div class="feature-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="feature-content">
                                                <h4>Work with heart</h4>
                                                <p>Our people are the heart and soul of Bosscuts. We combine technical
                                                    expertise and client service excellence to educate, engage and add value so our
                                                    clients look and feel incredible.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="feature-content">
                                                <h4>Reliable services</h4>
                                                <p>We are NZ’s largest and fastest growing barber company. We offer the best
                                                    opportunities for Barbers and Hairdressers to progress quickly, follow their
                                                    passion and become incredibly successful.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                    <br>
                        <div class="container">
                            <h2 class="aboutus-title">Business Cards</h2>
                            <br>
                                <div class="row">

                                    <div class="col-sm">
                                        <div class="card" style="width: 18rem;">
                                            <img src="/images/2.jpg" class="card-img-top" alt="...">
                                                <div class="card-body" style="background-color:#CFDEE7">
                                                    <h5 class="card-title">Steeb Thomas</h5>
                                                    <p class="card-text">Hair Stylist</p>
                                                    <p class="card-text">Phone: 0224545454</p>
                                                    <p class="card-text">Email: steeb@gmail.com</p>
                                                    <p class="card-text">Instagram: @steeb</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="card" style="width: 18rem;">
                                                <img src="/images/5.jpg" class="card-img-top" alt="...">
                                                    <div class="card-body" style="background-color:#CFDEE7">
                                                        <h5 class="card-title">Maria</h5>
                                                        <p class="card-text">Hair Designer</p>
                                                        <p class="card-text">Phone: 0224656565</p>
                                                        <p class="card-text">Email: mari@gmail.com</p>
                                                        <p class="card-text">Instagram: @Mari</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endsection
