<?php

namespace App\Repositories\Post;

interface PostContract
{
	public function create($request);
	public function edit($request, $postSlug);
	public function findById($postId);
	public function findBySlug($postSlug);
	public function findByAll();
	public function delete($postId);
}
