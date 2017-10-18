<div class="panel-body links">
    {{$singlepost->post_title}} <br> {{$singlepost->post_description}} <br> {{$singlepost->post_content}} <br> <a href="{{ route('postedit', $singlepost->post_slug) }}"> Edit </a> <a href="{{ route('postdelete', $singlepost->post_slug) }}" style="color:red"> Delete </a> <br> 
</div>
<br><br>

<a href="{{route('landingpage')}}"> Go Home </a>