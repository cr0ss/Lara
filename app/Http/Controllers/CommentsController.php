<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
    	$this->validate(request(), ['body' => 'required|min:2']);
    	
        $user_id = auth()->user()->id;
        //$userId = User::user()->id ;             
    	$post->addComment(request('body'), $user_id);
    	
    	return back();
    }
}
