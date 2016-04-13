<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to OOAK</title>
    <meta name="description" content="@yield('meta-description')">

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css"  rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/js/clock_assets/flipclock.css" />
    <link href="/css/style.css"  rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <body>
   <nav class="navbar navbar-default" style="padding-bottom: 0px">
     
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="/"><img src="/img/OOAKlogodraft.jpg" alt="One of A kind logo" class="logo"></a>
      <!--    <div class="navbar-toggle" data-toggle="collapse" data-target="shopping-cart">
         <a href="#" class="dropdown-toggle hidden-sm hidden-md hidden-lg" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="glyphicon glyphicon-shopping-cart" ></span>(0)<span class="caret">
                  </a>
                  <ul class="dropdown-menu" id="shopping-cart">
                  <li><a href="#">Your shopping cart is empty.</a></li>
                 </ul>
    </div>
         -->
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/story">Story</a></li>
                <li><a href="/work">Work</a></li>
                 <li><a href="/contact">Contact </a></li>
                <li class="hidden-xs"><a href="/"><img src="/img/OOAKlogodraft.jpg" alt="One of A kind logo" class="logo upperlogo"></a></li>
                <li class="dropdown">
                <a href="/shop">Shop<span class="caret">
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Catalogue1</a></li>
                  <li><a href="#">Catalogues2</a></li>
                  <li><a href="#">Catalogues3</a></li>
                  <li><a href="#">Catalogues4</a></li>
                </ul>
                </li>
                @if (Auth::guest())
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        <li><a href="{{ url('/login') }}">Login</a></li>

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif



              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                  <span class="glyphicon glyphicon-shopping-cart" ></span>(0)<span class="caret">
                  </a>
                  <ul class="dropdown-menu">
                  <li><a href="#"><small>Your shopping cart is empty.</small></a></li>
                </ul>
              </li>
            </ul>
    
        </div>
    </div>
</nav>
<br><br>

   
   @yield('content')

<footer>
<div class="container">
   <div class="row">
      <div class="col-sm-6">   
         <!-- <div class="text-center">
            <img src="/img/OOAKlogodraft.jpg" alt="OOAK logo" class="logo">
         </div> -->
         <p>One-of-a-Kind offers New Zealand  made unique and customisable objects.</p>
         <p>Copyright © 2016 One-of-a-Kind. All rights reserved.</p>
         <p>Design and Development by Alice Wu</p>
      </div>
      <div class="col-sm-3">
         <h4>One-of-a-Kind</h4>
         <p><span class="glyphicon glyphicon-home"></span>&nbspBoutique
Level 1, 104 The Terrace
Wellington, New Zealand</p>
         <p><span class="glyphicon glyphicon-earphone"></span>&nbsp +64 &nbsp 276818188</p>
         <p><span class="glyphicon glyphicon-envelope"></span>&nbsp ozosil@hotmail.com </p>
         
      </div>
      <div class="col-sm-3">
         <h4>Site Map</h4>
         <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/story">Story</a></li>
            <li><a href="/work">Work</a></li>
            <li><a href="/shop">Shop</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="#">Terms&Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
         </ul>
      </div>
   </div>
</div>
</footer>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script type="text/javascript" src="/js/jquery-2.2.3.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/clock_assets/flipclock.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGoKVYCpHSY6xiD4aNdvcGdFKLJGpQgx4&callback=initMap"async defer></script>
    <script src="/js/instafeed.min.js"></script>
    <script src="/js/pongstgrm/source/pongstagr.am.js"></script>
    <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.1/scrollreveal.min.js"></script>
    <script type="text/javascript" src="/js/vivus.min.js"></script>
    <script type="text/javascript" src="/js/svg-injector.js"></script>
    <script src="/js/main.js"></script>
    </body>
</html>
