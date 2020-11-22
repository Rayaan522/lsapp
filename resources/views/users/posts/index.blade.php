@extends('layouts.app')

@section('content')
 
<div class="flex justify-content">
   
    <div class= "w-8/12 bg-white p-6 rounded-lg">
         <div class="p-6">
         <h2 class="text-2xl font-medium mb-1">{{$user->name}}</h2>
         <p>Posted {{$posts->count() }} {{Str::plural('post', $posts->count())}}  
            and Received {{$user->receivedLikes->count()}} likes  </p>
         </div>
        @if($posts->count())
               @foreach($posts as $post)
               <x-post :post="$post"/>
              
          @endforeach
               {{ $posts->links() }}
              @else
            <p>{{$user->name}} does not have any Posts</p>
              @endif
    </div>
 
</div>

@endsection