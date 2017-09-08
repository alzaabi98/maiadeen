<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        
            <nav class="navbar">
                <div class="navbar-brand">
                    <a href="{{ route('home') }}" class="navbar-item">
                        <img src="{{ asset('images/maiadeen-logo.png') }}" alt="maiadeen logo" >
                    </a>

                
                    <div class="navbar-burger" data-target="navMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                    </div>
                </div>

                <div class="navbar-menu" id="navMenu"> 
                    <div class="navbar-end">
                        <a  class="navbar-item" href="#">تواصل معنا</a>
                        <a  class="navbar-item" href="#">الاسئلة المتكررة</a>
                        <a  class="navbar-item" href="#">الدورات</a>
                        <a  class="navbar-item" href="#">المحاضرون</a>
                        @if( Auth::guest())
                            <a  class="navbar-item auth-btn" href="{{ route('login')}}"> الدخول</a>
                            <a  class="navbar-item auth-btn" href="{{ route('register')}}">  انضم الينا</a>
                        @else
                            <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link"> 
                                الملف الشخصي
                            </a>

                            <div class="navbar-dropdown">
                                <a class="navbar-item"> <span class="p-r-10"> <i class="fa fa-user-circle-o"></i></span> 
                                    الملف
                                </a>
                                <a class="navbar-item"> <span class="p-r-10"> <i class="fa fa-bell"></i></span> 
                                    الاشعارات
                                </a>
                                <a class="navbar-item"> <span class="p-r-10"> <i class="fa fa-cog"></i></span> 
                                    الضبط
                                </a>
                                <hr class="navbar-divider">
                                
                                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="navbar-item">
                                    <span class="p-r-10"> <i class="fa fa-sign-out"></i></span> 
                                    الخروج                      
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}"   method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                             
                            </div>
                            </div>
                        @endif
                    </div>
                </div>
            </nav>
        

        
        @yield('content')
    </div>
<footer class="footer">
  <div class="container">
    <div class="content has-text-centered">
      <p>
        <strong>ميادين</strong>  &copy; 2017
        <br>
    
      <p>
        <a class="icon" href="#">
          <i class="fa fa-twitter"></i>
        </a>
      </p>
    </div>
  </div>
</footer>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
