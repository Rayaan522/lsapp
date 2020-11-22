<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function __construct(){

        $this->middleware(['auth'])->only(['store','destroy']);

    }

     public function index(){

        $posts = Post::orderBy('created_at','desc')->with(['user','likes'])->paginate(2); 

        // Return all Post
         return view('posts.index',[
             'posts' => $posts
         ]);
    }
     public function store(Request $request){

         $this->validate($request,[
             'body'=>'required'
             ]);

          
         auth()->user()->posts()->create($request->only('body'));
         
         return back();
       
     }

     public function show(Post $post){
         return view('posts.show',[
             'post'=>$post
         ]);

     }

    public function destroy(Post $post){

    $this->authorize('delete',$post);

        $post->delete();

        return back();
         

    }
}
