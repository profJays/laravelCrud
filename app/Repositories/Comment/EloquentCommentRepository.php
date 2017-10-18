<?php

namespace App\Repositories\Post;
use App\Repositories\Post\PostContract;
use App\Post;

class EloquentPostRepository implements PostContract
{
	public function create($request){
	
        $post = new Post;
        $post->post_title = ucwords($request->post_title);
        $post->post_description = $request->post_description;
        $post->post_text = $request->post_text;
        $post->post_image = $request->post_image;
        $post->post_slug = strtolower(str_slug($request->post_title));

        $slug = Post::where('post_slug', $post['post_slug'])->first();
        if($slug){
          $post['post_slug'] = $post['post_slug'].'-'.(rand(0,99));
        }
        // $dog->user_id = $request->user_id;
        $post->save();
	}


	public function delete($postSlug){
		$deletePost = $this->findBySlug($postSlug);
        $deletePost->delete();
     	return $deletePost;
	}
}
