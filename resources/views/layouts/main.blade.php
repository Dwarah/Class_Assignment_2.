<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand text-uppercase" href="{{'/'}}">            
            <strong>My Blog</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            
        <!-- /.navbar-header -->
        <div class="collapse navbar-collapse" id="navbar-toggler">
          @auth
            <ul class="navbar-nav">
              <li class="nav-item"><a href="{{'/blog'}}" class="nav-link">Blogs</a></li>
            </ul>
          @endauth
            <ul class="navbar-nav ml-auto">
            @guest
            <li class="nav-item mr-2"><a href="{{route('login')}}" class="btn btn-outline-secondary">Login</a></li>
            <li class="nav-item"><a href="{{route('register')}}" class="btn btn-outline-primary">Register</a></li>
          @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <!-- content -->
   @yield('content')
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>