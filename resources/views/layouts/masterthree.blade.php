<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/masterthree.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/crop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/clock.css') }}" rel="stylesheet">
    <link href="{{ asset('css/liMarquee.css') }}" rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">



<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script1.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script2.js')}}"></script>
<script type="text/javascript" src="{{asset('js/liMarquee.js')}}"></script>
<script type="text/javascript" src="{{asset('js/crop.js')}}"></script>
<script type="text/javascript" src="{{asset('js/exif.js')}}"></script>

<script>
    function myFunction(){
        var x = document.getElementById("myTopnav");
        if(x.className === "linkbox"){
            x.className += "responsive";
        } else {
            x.className = "linkbox";
        }
    }
</script>

  
  






    <title> K-Ties </title>

    
 
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" id="color">
            <div class="contained">
          
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <div class="branddiv">
                        <div class="brand">K-Ties Construction</div>
                    </div>
                </div>



                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    


                    
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" id="topright">
                        <!-- Authentication Links -->
                        @guest
                            <li><a id ="white" href="{{ route('login') }}">Login</a></li>
                            <li><a id ="white" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown" id="color">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color:white; background-color: #551A8B !important;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>

                <!-- Middle Of Navbar -->
                     <div class="linkbox" id="myTopnav">
            <a href="{{ route('kties') }}" class="link">Home</a>
            <a href="{{ route('projects') }}" class="link">Projects</a>
            <a href="{{ route('hire_us') }}" class="link">Hire Us</a>
            <a href="{{ route('shop') }} " class="link">Shop</a>
            <a href="{{ route ('services') }} " class="link">Services</a>
            
            <a href="{{ route('team') }}" class="link">Team</a>
        
            <a href="{{ route('about_us') }}" class="link">About</a>
            <a href="" class="link">Careers</a>
            <a href="{{ route('contact') }}" class="link">Contact</a>
            <a href="account" class="link">Account</a>
            <a class="link">Sacco</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>


        </nav>


        
<div class="content" >
        @yield('content')
    </div>

<div class="footer">
        <a href="#" class="medialinks"><i class="fab fa-facebook-square"></i></a>
        <a href="#" class="medialinks"><i class="fab fa-twitter-square"></i></a>
        <a href="#" class="medialinks"><i class="fab fa-instagram"></i></a>
        <a href="#" class="medialinks"><i class="fab fa-skype"></i></a>
        <a href="#" class="medialinks"><i class="fab fa-twitter-square"></i></a>
        <a href="#" class="medialinks"><i class="fab fa-youtube"></i></a>
</div>

    <!-- Scripts -->
<script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
<script type="text/javascript" src="{{asset('js/clock.js')}}"></script>
     

     <script>
$(window).load(function() { 
        
    /* basic - default settings */
        $('.str3').liMarquee();
        
        /* some custom settings */
        
        
        $('.str3').liMarquee({
            direction: 'right',  
            loop:-1,            
            scrolldelay: 0,     
            scrollamount:50,   
            circular: true,     
            drag: true          
        });
        
    
        
    })
</script>

</body>
</html>
