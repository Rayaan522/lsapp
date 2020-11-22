@extends('layouts.app')

@section('content')
 <section id="post" class="py-5  ">
 <div class="container">
     <div class="row">
         <div class="col-md-6">
             <div class="card card-body p-5">
                 @auth
             <form action="{{ route('posts') }}" method="post"class="mb-4">
                {{ csrf_field () }}
                <div class="form-group">
                    <label for="body"></label>
                    <textarea name="body" id="body" cols="30" rows="4"class="form-control @error('body') border-danger @enderror "placeholder="Post Something..."></textarea>
                    @error('body')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                 </div>
                <input type="submit" value="Post" class="btn btn-primary btn-sm form-control">
              </form>
        
              @if($posts->count())
               @foreach($posts as $post)

               <x-post :post="$post"/>
                
               @endforeach
               {{ $posts->links() }}
              @else
              <p>There are No Posts</p>
              @endif
              @endauth
             </div>
         </div>
     </div>
 </div>
</section>

@endsection