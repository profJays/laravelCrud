All our Blog post

<br><br><br>
Add new blog post

<a href="{{route('newpostform')}}"> Click here to add new blog post </a>

<br><br>
<div>
@foreach ($allPosts as $post)
    {{ $loop->index+1}}) {{$post->post_title}} <span style="color:#c4c4c4"> {{$post->post_description}} </span> <a href="{{ route('postview', $post->post_slug) }}"> View </a> <a href="{{ route('postedit', $post->post_slug) }}"> Edit </a> <a href="{{ route('postdelete', $post->post_slug) }}" style="color:red"> Delete </a> <br> 
@endforeach

</div>