<?php

namespace App\Repositories\Comment;
use App\Repositories\Comment\CommentContract;
use App\Comment;

class EloquentCommentRepository implements CommentContract
{
	public function create($request){
	
        $comment = new Comment;
        $post->post_title = ucwords($request->post_title);
        $post->post_description = $request->post_description;
        $post->post_text = $request->post_text;
        $post->post_image = $request->post_image;

        // $dog->user_id = $request->user_id;
        $post->save();
	}


	public function delete($postSlug){
		$deletePost = $this->findBySlug($postSlug);
        $deletePost->delete();
     	return $deletePost;
	}
}
