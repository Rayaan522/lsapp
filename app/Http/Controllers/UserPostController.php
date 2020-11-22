<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Post;

class UserPostController extends Controller
{
    public function index (User $user,Post $posts){
        // dd($user);
        $posts = $user->posts()->with('likes','user')->paginate(20);
        return view('users.posts.index',
        ['user'=> $user,
        'posts'=> $posts
        ]
    );

    }
}
