@extends('layouts.app')

@section('content')

<section id="register bg-light py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="card mt-10 mb-10">
                    <div class="card-body">
                        <div class="card-header">
                            <h4 class="display-5 "> Account Register</h4>
                        </div>
                        <div class="card-body p-5">
                        <form action="{{ route('register') }}"method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" name="name" id="name"class="form-control @error('name') border-danger @enderror form-control-lg" >
                                @error('name')
                                <div class="text-danger mt-2 text-md">
                                {{$message}}
                            </div>
                                @enderror
                            </div>
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
                                <label for="username">username</label>
                                
                                <input type="text" name="username"id="username"class="form-control form-control-lg @error('username') border-danger @enderror" >
                                @error('username')
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
                            <div class="form-group">
                                <label for="password_confirmation">password_confirmation</label>

                                <input type="password" name="confirm_password" id="password_confirmation"class="form-control form-control-lg @error('password_confirmation') border-danger @enderror ">
                                @error('password_confirmation')
                                <div class="text-danger mt-2 text-md">
                                {{$message}}
                               </div>
                                @enderror
                              
                            </div>
                            <input type="submit" value="Register" class="btn btn-outline-primary btn-block btn-lg">
                        </form>
                        
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
 
       
@endsection