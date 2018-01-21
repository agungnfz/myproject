<!DOCTYPE html>
<html>
<head>
	<title>judul na </title>
</head>
<body>
@foreach($posts as $post)
	<a href="{{ route('post.show',['slug'=>$post->slug]) }}">{{ $post->title }}</a> <br>
	{!! $post->body !!} <hr>
@endforeach
</body>
</html>