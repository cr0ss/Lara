<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *
     * public function __construct()
     * {
     *     $this->middleware('auth');
     * }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')
            ->take(3)
            ->get();  

        $user_posts = Post::select(DB::raw('count(*) as count, user_id'))                       
            ->groupBy('user_id')
            ->get();

        $user_comments = Comment::select(DB::raw('count(*) as count, user_id'))                       
            ->groupBy('user_id')
            ->get();                

//print_r($user_posts);
        return view('home.index', compact('posts', 'user_posts', 'user_comments'));
    }

    public function logged()
    {
       session()->flash(
            'message', 'Your succesfuly logged in!'
        );

        return redirect('/');
    }
    
}
