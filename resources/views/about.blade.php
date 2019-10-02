@extends('layouts.app')

@section('content') < link href = 'https://fonts.googleapis.com/css?family=Roboto' rel = 'stylesheet' > <div class="container">
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
                                <p class="aboutus-text">Aenean vulputate eleifend tellus. Aenean leo ligula,
                                    porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus
                                    in.</p>
                                <p class="aboutus-text">This is Photoshop's version of Lorem Ipsum. Proin
                                    gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                    auctor, nisi elit consequat ipsum, nec sagittis sem</p>
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
                                                <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                                                    vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
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
                                                <p>Donec vitae sapien ut libero venenatis faucibu. Nullam quis ante. Etiam sit
                                                    amet orci eget eros faucibus tincidunt</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="feature-content">
                                                <h4>Great support</h4>
                                                <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                                                    vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
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
                                                <img src="/images/6.jpg" class="card-img-top" alt="...">
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