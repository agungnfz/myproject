<!DOCTYPE html>
<html>
<head>
	<title>judul na </title>
</head>
<body>

	{{ $post->title }} <br>
	<img src="{{ asset('storage/'.$post->image) }}"> <br>
	{!! $post->body !!} <hr>

</body>
</html>