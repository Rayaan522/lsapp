@extends('layouts.app')

@section('content')

<section id="register bg-light py-5 p-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-9 align-self-center">
                <div class="card mt-10 mb-10">
                    <div class="card-body">
                        <div class="card-header">
                            <h4 class="display-5"> Account Login</h4>
                        </div>
                        <div class="card-body p-5">
                            @if (session('status'))
                            <div id="status" class="text-md text-white bg-danger  ">
                                {{session('status')}}
                            </div>
                            @endif
                        <form action="{{route('login')}}" method="post">
                            {{ csrf_field() }}
                             
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email"name="email" id="email" class="form-control form-control-lg @error('email') border-danger @enderror" >
                                @error('email')
                                <div class="text-danger mt-2 text-md">
                                {{$message}}
                            </div>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <label for="password">Password</label>

                                <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') border-danger @enderror" >
                                @error('password')
                                <div class="text-danger mt-2 text-md">
                                {{$message}}
                            </div>
                                @enderror
                            </div>
                             
                            <div class="form-check">
                                <label class="form-check-label ">
                                    <input class="form-check form-check-lg " type="checkbox">Rememnber me  
                                </label>
                            </div>
                               
                             <input type="submit" value="Login" class="btn btn-outline-primary btn-block btn-lg mt-3">
                          
                        </form>
                        
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
 
       
@endsection

<script>
      $('#status').setTimeout(() => {
          
      }, 3000);
</script>
 
   