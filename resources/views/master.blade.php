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
    <link href="/css/style.css"  rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <body>
   <nav class="navbar navbar-default" style="padding-bottom: 0px">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="/"><img src="/img/OOAKlogodraft.jpg" alt="One of A kind logo" class="logo"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/story">Story</a></li>
                <li><a href="/work">Work</a></li>
                 <li><a href="/contact">Contact </a></li>
                <li class="hidden-xs"><a href="/"><img src="/img/OOAKlogodraft.jpg" alt="One of A kind logo" class="logo upperlogo"></a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/register">Register</a></li>
              <li><a href="/login">Login</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-shopping-cart" ></span>(0)</a></li>
            </ul>
    
        </div>
    </div>
</nav>

   
   @yield('content')

<footer>
<div class="container">
    <p>Copyright © 2016- One-of-a-Kind. All rights reserved.</p>
    <p>Design by Alice Wu </p>
</div>
    
</footer>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.1/scrollreveal.min.js"></script>
    <script src="/js/main.js"></script>
    </body>
</html>
