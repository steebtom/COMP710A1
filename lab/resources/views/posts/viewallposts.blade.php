<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h1>All Posts</h1>
    <!-- @foreach($posts as $post)
    <?php echo $post; ?><br>
    @endforeach -->

    <!-- @foreach ($posts as $post)
        <p>This is Post {{ $post }}</p>
        var_dump($posts::all());
    @endforeach -->

    <!-- @for ($i = 0; $i < 3; $i++)
    The current value is {{ $posts[$i] }}
    @endfor -->
    <ul>
				@foreach($posts as $post)
                <!-- php echo $post->id; -->
					<li> {{$post->title}}  {{$post->body}}</li> 
				@endforeach;
	</ul>
</body>
</html>