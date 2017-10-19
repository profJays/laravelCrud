<?php

namespace App\Repositories\Post;
use App\Repositories\Post\PostContract;
use App\Post;
use Storage;
use Log;

class EloquentPostRepository implements PostContract
{
	public function create($request){
	
        $post = new Post;



      //if($request->post_image != null){
        $explodeBase64Image = explode(',', $request->post_image);
        //$decodedimage = base64_decode($explodeBase64Image[1]);
        \Log::info($decodedimage);

        if(str_contains($explodeBase64Image[0], 'jpeg')){
          $extension = 'jpg';
        }else{
          $extension = 'png';
        }

        // $post_image = $request->file('post_image');
        $imageFileName = time() . '.' . $extension;
        $s3 = \Storage::disk('s3');
        $filePath = 'post_image/' . $imageFileName;

        $path = $s3->put($filePath, $decodedimage, 'public');
        $imageName = \Storage::disk('s3')->url($filePath);
         Log::info($imageName);


        $post->post_title = ucwords($request->post_title);
        $post->post_description = $request->post_description;
        $post->post_content = $request->post_content;
        $post->post_image = $imageName;
        $post->post_slug = strtolower(str_slug($request->post_title));

        $slug = Post::where('post_slug', $post['post_slug'])->first();
        if($slug){
          $post['post_slug'] = $post['post_slug'].'-'.(rand(0,99));
        }
        // $dog->user_id = $request->user_id;
        $post->save();
	}


	public function edit($request, $postSlug){
		$post = $this->findBySlug($postSlug);
        $post->post_title = ucwords($request->post_title);
        $post->post_description = $request->post_description;
        $post->post_content = $request->post_content;
        $post->post_image = $request->post_image;
        $post->post_slug = strtolower(str_slug($request->post_title));

        $slug = Post::where('post_slug', $post['post_slug'])->first();
        if($slug){
          $post['post_slug'] = $post['post_slug'].'-'.(rand(0,99));
        }
        // $dog->user_id = $request->user_id;
        $post->save();
	}


	public function findById($postId){
		return Post::find($postId);
	}

	public function findBySlug($postSlug){
      $post = Post::where('post_slug', $postSlug)->first();
      return $post;
    }

	public function findByAll(){
		$allpost = Post::orderBy('id', 'DESC')->get();
        //$posts = Post::orderBy('id', 'DESC')->get();
		return $allpost;
	}
	public function delete($postSlug){
		$deletePost = $this->findBySlug($postSlug);
        $deletePost->delete();
     	return $deletePost;
	}
}
