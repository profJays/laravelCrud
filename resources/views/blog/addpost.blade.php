Create new post form goes here
<br><br><br>

<form action="{{route('handleNewPost')}}" method="post">
	{{csrf_field()}}
	<input type="text" name="post_title" placeholder="Add Title"/><br><br>
	<input type="text" name="post_description" placeholder="Add description"/><br><br>
	<textarea name="post_content" placeholder="Add Post">
		
	</textarea><br><br>

	<input type="file" name="post_image" placeholder="Upload Image"><br><br>
	<input type="submit" name="Create Post">
</form>

<br><br>

<a href="{{route('landingpage')}}"> Go Home </a>