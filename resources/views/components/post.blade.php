@props(['post'=> $post])
<div class="container">
<div class="mb-4">
    <a href="{{ route('users.posts', $post->user ) }}" class="text-md">{{ $post->user->name}}</a> <span class="text-muted text-light">{{$post->created_at->diffForHumans()}}</span>
    <p mb-3>{{$post->body}}</p>
@can('delete',$post) 
  
 <form action="{{route('posts.destroy', $post)}}" method="post">
     {{ csrf_field() }}
     @method('DELETE')
    <button class="text-danger">Delete</button>
 </form>
 
  @endcan

<div class="flex items-center">
    @auth
    @if(!$post->likedBy(auth()->user()))
    
     <form action="{{ route('posts.likes', $post ) }}" method="post" class="mr-1">
        {{ csrf_field() }}
         <button type="submit" class="text-blue-500">Like</button>
         </form>
         @else
     <form action="{{ route('posts.likes', $post )}}" method="post" class="mr-1">
         {{ csrf_field() }} 
         @method('DELETE') 
     <button type="submit" class="text-blue-500">Unlike</button>
 </form>
 @endif
<span>{{ $post->likes->count() }}   {{ Str::plural('like',$post->likes->count()) }}</span>
@endauth
</div>
</div>
</div>