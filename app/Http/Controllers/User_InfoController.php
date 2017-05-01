<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class User_InfoController extends Controller
{
    public function show($id)
    {	
    	if (Auth::guest()){
    		$cur_user = 'guest';
    	}
    	else {
    		$cur_user = Auth::user()->id;
    	};
    	    	  
        $user = User::find($id);             
        $user_posts = Post::where('user_id', $id)->count();
        $user_comments = Comment::where('user_id', $id)->count();        

        if ($id == $cur_user) {
            return view('home.user_change_info', compact('user'));
        }
        else {
         	return view('home.user_info', compact('user', 'user_posts', 'user_comments'));
        };

        
    }   

    public function update($id, Request $request)
    {   
    	if($request->image) {
    	    $imageName = $id.'_pic.'.$request->image->getClientOriginalExtension();    	
        	$request->image->move(public_path('avatars'), $imageName);
        	$upd = User::where('id', $id)
			->update([			
				'avatar_url' => '/lara/avatars/'.$imageName
			]); 
    	};      
    			

    	$name = request('name');
    	$last_name = request('last_name');   
    	$email = request('email'); 	
    	$country = request('country');
    	$phone = request('phone');
    	$gender = request('gender');
    	$about = request('about');

		$update = User::where('id', $id)
		->update([
			'name' => $name,
			'last_name' => $last_name,
			'email' => $email,
			'country' => $country,
			'phone' => $phone,
			'gender' => $gender,			
			'about' => $about
		]);  

		session()->flash(
            'message', 'Your account info has been updated ' .$name. '!'   
        );

    	return back();        
    }
   
}
