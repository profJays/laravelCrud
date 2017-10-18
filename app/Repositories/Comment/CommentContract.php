<?php

namespace App\Repositories\Commen

interface Commenontract
{
	public function create($request);
	public function delete($commentId);
}
