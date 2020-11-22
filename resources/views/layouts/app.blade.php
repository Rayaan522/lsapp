<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lsapp</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm  navbar-dark bg-dark">
        <div class="container">
          <a href="index.html" class="navbar-brand" >lsapp</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id= "navbarCollapse" >
            <ul class="navbar-nav ">
                <li class="nav-item" >
                    <a href="/" class="nav-link">Home</a>
                    
                </li>
              <li class="nav-item">
               <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
             </li>
             <li class="nav-item ">
               <a href="{{ route ('posts') }}" class="nav-link">Posts</a>
             </li>
 
            </ul>
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                    @auth
                    <a href="#" class="nav-link" {{ auth()->user()->name }}></a>
                  </li>
                  <li >
                    <form action="{{ route('logout') }}" method="post">
                        {{ csrf_field() }}
                    <button class="p-3 text-primary">Logout</button>
                      </form> 
                      @endauth 
                    </li>
                    @guest
                    <li class="nav-item" >
                        <a href="{{route('register')}}" class="p-3 nav-link">Register</a>
                            
                        </li>
                        <li class="nav-item">
                        <a href="{{route('login')}}" class="p-3 nav-link">Login</a>
                            
                        </li>
                    
                        @endguest
            </ul>

     
          </div>
        </div>
       </nav>
   
    {{-- <nav class="navbar navbar-sm py-5 bg-dark ml-auto mb-0"> 
        <ul class="flex items-center ">
            <li >
                <a href="/" class="p-3">Home</a>
                
            </li>
            <li >
            <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                
            </li>
            <li >
            <a href="{{ route ('posts') }}" class="p-3">Posts</a>
                
            </li>
          
        </ul>
        <ul class="flex items-center">
          @auth
            <li >
                <a href="#" class="p-3">{{ auth()->user()->name }}</a>
                
            </li>
            <li >
            <form action="{{ route('logout') }}" method="post">
                {{ csrf_field() }}
            <button class="p-3 text-primary">Logout</button>
              </form>  
            </li>
           @endauth 
            
           @guest
            <li >
                <a href="{{route('register')}}" class="p-3">Register</a>
                    
                </li>
                <li >
                <a href="{{route('login')}}" class="p-3">Login</a>
                    
                </li>
            
           @endguest

            
            
           
          
        </ul>
    </nav> --}}

 
@yield('content')
</body>


</html>