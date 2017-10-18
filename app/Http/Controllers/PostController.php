<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Post\PostContract;

class PostController extends Controller
{
    protected $repo;

    public function __construct(PostContract $postContract){
      $this->repo = $postContract;
    }

    public function createpost(){
    	return view('blog.addpost');
    }

    public function handleNewPost(Request $request){
    	$new_post = $this->repo->create($request);

        if ($new_post){
            return redirect()->route('landingpage');
        }else{
            return back();
        } 
    }

    // public function viewpost(){
    // 	return view('blog.addpost');
    // }  

    public function viewpost($postSlug){
    	$post = $this->repo->findBySlug($postSlug);
    	return view('blog.view')->with('singlepost', $post);
    }

    public function deletepost($postSlug){
        $deletepost = $this->repo->delete($postSlug);
        if ($deletepost){
            return redirect()->route('landingpage');
        }else{
            return back();
        } 
    }

    public function editpost($postSlug){
        $editpost = $this->repo->findBySlug($postSlug);
        return view('blog.editpost')->with('singlepost', $editpost);        
    }  


    public function handleEditPost(Request $request, $postSlug){
        $editpost = $this->repo->edit($request, $postSlug);
        if ($editpost){
            return redirect()->route('index');
            // return redirect()->route('viewpost');
        }else{
            return back();
        } 
    }     

}
