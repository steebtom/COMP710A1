<html>
    <head>
        <style>

            .showcase {
                background-image: url("/images/Age_Group_1.jpg");
                background-size: cover;
                background-repeat: no-repeat;
            }

            .low {
                background-color: light-green;
            }

            body {
                background-color: #A2CBBD;
            }
        </style>
    </head>
    <body>
        @if ($message = Session::get('bookingsuccess'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
        @endif

        <div class="jumbotron text-center">
            <div class="section1">
                <h1>Bosscuts, Hamilton</h1>
                <form name="book" action="{{route('check')}}">
                    <p class="lead">Get your own style</p>
                    <button type="submit" class="btn btn-danger">Book Now</button>
                </form>
            </div>
        </div>

        <div class="container">
            <h1>Bosscuts, Hamilton</h1>
            <div>
                <p class="lead">Get your own style</p>
                Boss Cuts. is the largest and fastest growing barber shop. In 2014 founders
                Albert Markus and Peter Winnikkie could see a significant gap in the growing
                mens grooming market. The first store opened in Hamilton,in January 2015. By
                2016 more than half a dozen Bosscuts outlets opened across Auckland and
                Hamilton, creating a real buzz in the market and challenging the standard of
                mens grooming. By focusing on ‘the thousand details’ that make up the client
                experience, Bosscuts was able to grow at a blistering pace with 10 stores open
                by the end of 2016.
            </div>
            <br>
            <div>
                <br>
                <img src="/images/2.jpg" width="1100">
            </div>
            <br><br>
            <div>
            <h1>Contact Details: </h1>
            <b>Address:</b> 174 Clarkin Road, Fairfield, Hamilton 3791<br>
            <b>Phone:</b> 02102844736<br>
            <b>Email:</b> bosscutshamilton@gmail.com<br>
            </div>
        </div>
    </div>

    <body></div>
</div>
</html>
