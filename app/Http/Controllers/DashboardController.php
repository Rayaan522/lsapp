<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Post;
use App\Mail\PostLiked;


class DashboardController extends Controller
{
     
    public function index (){
        
    

        return view('dashboard');

    }
}
