<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title> VALDAS Vosilius</title>

  <!-- Styles -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="http://csshake.surge.sh/csshake-slow.min.css">
  <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/hbar.css') }}" rel="stylesheet">
  <link href="{{ asset('css/kvadratas.css') }}" rel="stylesheet">
  <link href="{{ asset('css/chineseCalendar.css') }}" rel="stylesheet">
  <link href="{{ asset('css/namo.css') }}" rel="stylesheet">
  <link href="{{ asset('css/matrix.css') }}" rel="stylesheet">

  <!-- Scripts -->

  <script>

  window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token(),
    ]) !!};
    </script>

  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="{{ url('/') }}">
            VALDAS
          </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
            @if (Auth::user() && Auth::user()->isAdmin())
            <li><a href="{{route('user.index')}}"><i class="fa fa-users" aria-hidden="true"></i></a></li>
          @endif
            <li><a href="{{route('names.index')}}"><i class="fa fa-handshake-o" aria-hidden="true"></i> Aukcionas</a></li>
            <li> <a href="{{route('cvLapas')}}"><i class="fa fa-address-card-o" aria-hidden="true"></i> CV</a></li>
            <li><a href="{{route('porfolios.index')}}"><i class="fa fa-clone" aria-hidden="true"></i> Porfolio</a></li>
            <li><a href="{{route('chineseCalendar.index')}}"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Kinų Kalendorius</a></li>
            <li><a href="{{route ('magic.index') }}"><i class="fa fa-magic" aria-hidden="true"></i> Magiškasis kvadratas</a></li>
            <li><a href="{{route ('bus.index') }}"><i class="fa fa-bus" aria-hidden="true"></i> Autobusai</a></li>
            <li><a href="{{route ('matrix.index') }}"><i class="fa fa-th" aria-hidden="true"></i> Matrix</a></li>
            <li><a href="{{route ('contacts.index') }}"><i class="fa fa-address-book-o" aria-hidden="true"></i> Kontaktai</a></li>
            {{-- <li><a href="#">-MainPage?</a></li>
            <li><a href="#">-formuSaugumas</a></li>
            <li><a href="#">-LaikrodisNames'ams</a></li> --}}

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
              <div class="hidden-md hidden-lg hidden-sm">
            <a class="btn btn-default " href="{{ route('auth.login') }}">Prisijungti</a>
            <a class="btn btn-default" href="{{ route('auth.register') }}">Registracija</a>
            </div>
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu pull-right" role="menu">
                  <li>
                    <a href="{{ url('auth/logout') }}"
                  >
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Atsijungti
                  </a>

                  <form id="logout-form" action="{{ url('auth/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
                <li> <a href="{{ route('profile') }}"><i class="fa fa-user" aria-hidden="true"></i> Profilis</a></li>
              </ul>
            </li>
          @endif
          </ul>
        </div>
      </div>
    </nav>
    
    
    
    
    <video class="background-video hidden-sm hidden-xs" src="{{ asset('video/Bokeh.mp4')}}" autoplay loop></video>
    <header class="container ">

      <div class="row">
        <div class="col-sm-6 ">
          <a class="white-a "href="{{ url('/') }}"><h1><span>Valdas</span></h1><p>Vosilius</p></a>
        </div>

        <div class="col-sm-5  right hidden-xs login-stability hidden" id="loginInputs">
          @if(!Auth::user())
          <form class="form-horizontal" role="form" method="POST" action="{{ url('auth/login') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <div class="col-sm-6 col-sm-pull-1">
                      <input placeholder="e-paštas" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                      {{-- @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif --}}
                  </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                  <div class="col-sm-6 col-sm-pull-1">
                      <input placeholder="slaptažodis" id="password" type="password" class="form-control" name="password" required>

                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-8 col-sm-push-2">
                      <button type="submit" class="btn btn-primary">
                          <i class="fa fa-sign-in" aria-hidden="true"></i>
                      </button>
                      <a href="{{ url('auth/register') }}" class="btn btn-success ">
                        <i class="fa fa-user-plus " aria-hidden="true"></i>
                      </a >
                  </div>
              </div>
          </form>
      </div>
      <div class="col-sm-1 pull-right hidden-xs goUp">
        <a href="#" id="toggle-login" ><i class="fa fa-sign-in" aria-hidden="true"></i></a>
      </div>
    @endif
    </div>
  </header>


  <div id="app">
    <div class="main">
      <div class="container page ">
        @yield('content')
      </div>
    </div>
  </div>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

  @if (Auth::guest())
  <script src="{{ asset('js/small.js') }}"></script>
@endif
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="{{ asset('js/kvadratas.js')}}"></script>
<script type="text/javascript">
</body>
</html>
