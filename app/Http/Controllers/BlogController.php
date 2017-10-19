<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Post\PostContract;
use App\Post;

class BlogController extends Controller
{
	protected $repo;

	public function __construct(PostContract $postContract){
		$this->repo = $postContract;
	}

    public function index(){
    	$allPost = $this->repo->findByAll();
    	//dd($allPost);
    	return view('blog.index')->with('allPosts', $allPost);
    }

    //CONTROLS FOR APIs

    public function apiAllpost(){
    	$allPost = $this->repo->findByAll();
    	//dd($allPost);
    	$json = json_encode($allPost);
    	return $json;
    }
}
