@extends('layouts.app')

@section('content')

<div class="container">

   

    <div class="panel panel-primary">

      <div class="panel-body">

   

        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

                <strong>{{ $message }}</strong>

        </div>


        @endif



       
        @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

  

        <form action="{{ route('submitvideo') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <h1>Upload Video</h1>
            <div class="row">

            <div class="form-group row">

                <div>
                <div class="row">
                <div class="form-group row">
                            <label for="bookingDate" class="col-md-4 col-form-label text-md-right">{{ __('Select Video:') }}</label>
                <div class="col-md-6">

                    <input type="file" accept=".mov" name="video" class="form-control">
                </div>
                
                </div>

                <div class="form-group row">
                <button type="submit" class="btn btn-success">Upload</button>
                
                
                </div>



   

            </div>

        </form>

  

      </div>

    </div>

</div>

</body>

  

</html>





<video controls autoplay="autoplay" width="600" height="400" >
  <source src="videos/video.mp4" type="video/mp4">

</video>





@endsection