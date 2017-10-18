Edit Post
<br><br>

<form action="{{route('handleEditPost', $singlepost->post_slug)}}" method="post">
	{{csrf_field()}}
	<input type="text" name="post_title" value=" {{$singlepost->post_title}}" placeholder="Add Title"/><br><br>
	<input type="text" name="post_description" value=" {{$singlepost->post_description}}" placeholder="Add description"/><br><br>
	<textarea name="post_content" placeholder="Add Post" value=" {{$singlepost->post_description}}">
		{{$singlepost->post_description}}
	</textarea><br><br>
	<input type="file" name="post_image" value="{{$singlepost->post_image}}" placeholder="Upload Image"><br><br>
	<input type="submit" name="Edit Post">
</form>

<br><br>

<a href="{{route('landingpage')}}"> Go Home </a>