<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Scripts -->
<script>
 window.Blog = {!! json_encode([
 'csrfToken' => csrf_token(),
]) !!};
    </script>
<style>
html, body{
  background-color: #161616;
  color: #e0dede;
}
#app{
  background-color: #161616;
  color: #e0dede;
}
#user-widget {
  width: 100%;
  background: ;
  padding: 0px;
  border-radius: 4px;
  box-shadow: 0px 0px 25px rgba(0,0,0,.4);
 
}
.user-info {
  background: #DB6130;
  border-radius: 4px;
  overflow: hidden;
 
}
.user {
  margin-top: 20px;
  display: inline-block;
  width: 150px;
  color: white;
  font-weight: bold;
}
.followers {
  font-size: 10px;
  display: inline-block;
  width: 150px;
  color: #eaeaea;
  font-weight: regular;
}
#menu {
  width: 250px;
  font-family: Open Sans;
  color: #808080;
  font-size: 14px;

}
#menu > ul {
  display: none;
  border-radius: 0px 0px 4px 4px;
}



#menu:hover > ul {
  display: block;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
#menu li {
  padding: 10px;
  background: white;
  
}
#menu ul li {
  text-align: left;
  font-size: 13px;
  border-top: solid 1px #eaeaea;

}
#menu ul li span:after {
  
    content: "\00a0";

}

#menu ul li:hover {
  text-align: left;

}
#menu ul {
  clear: both;
}
.img-circle{
  float: left;
  display: inline-block;
  width: 50px;
  height: 50px;
  font-size: 30px;
  text-align: center;
  line-height: 50px;
  color: #DB6130;
  background: white;
  border-radius: 27px;
  margin: 10px;
  border: solid 3px #dedede;
  
}
#menu a{
  text-decoration: none;
  color: #808080;
}
#menu a:hover {
  color: #404040;
}
#menu a:hover > span.hover {
  transition: opacity 1s;
  opacity: .7;
}
.hover {
  display: inline-block;
  margin-bottom: 4px;
  opacity: .0;
  font-size: 10px;
  color: white;
  background: #ff6600;
  border-radius: 2px;
}
.hover:before {
  content: "\00a0";
}

    </style>
</head>
<body>
@if (Auth::guest())
  <li><a href="{{ route('login') }}">Login</a></li>
  <li><a href="{{ route('register') }}">Register</a></li>
@else
<ul id="user-widget">
  <li class="user-info" id="menu">
    <span>
      <img src="Img/ako.jpg" class="img-circle" height="60" width="60" alt="Avatar">
    </span>
    <span class="user">
     {{ Auth::user()->name }}
    </span>
    <span class="followers">
      Currently Login
    </span>
    <ul>
      <li> 
        <a href="#">
          <span class="entypo-location"> </span>
           Login
          <span class="hover"> Are you Sure? </span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="entypo-star"> </span> Register
          <span class="hover"> Register Now!</span>
        </a>
        </li>
      <li> <a href="#">
          <span class="entypo-comment"> </span> 
           <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            Logout
           </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            </form>                    
          <span class="hover"> Drop a Line </span>
        </a>
       </li> 
    </ul>
  </li>
</ul>
    </div>
        </div>
             @endif
            </ul>
        </div>
    </div>
@yield('content')
<header class="intro-header" style="background-image: url('Img/home-bg.jpg');background-attachment:fixed">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1 style="font-family:Edwardian Script ITC">Make Your Reflection</h1>
                        <hr class="long">
                        <span class="subheading">Create Your Own Stunning Web Blog's</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
</nav>
<h1 style="font-family:Courier New;text-align:center;font-size:50px">Welcome To My Blog</h1>
<br>
<h1 style="font-family:Edwardian Script ITC;text-align:center">Blog Description</h1>
  <hr class="long">
  <h6 class="subheading" style="text-align:center;font-family:Gabriola;font-size:20px">
                              <p>
                                So you want to be a blogger, do you?  Blogging over the long term takes: Passion, Purpose, Productivity, People Skills, Planning and Persistence. Many bloggers don’t have what it takes because a significant number of blogs registered today will be abandoned or deleted in less than a year from the date of their creation.<br>

                                That’s why answering the question: Do I have what it takes to blog over the long term? is critical to your success.<br><br>

                                If you think you have what it takes and are determined to stay the course then know that bogging begins with defining a purpose for your blog that clearly expresses your aim to blog with passion about something that matters.<br><br> On one hand, in-depth knowledge of the topic you are writing on will make your blogging easier. On the other, no matter how much knowledge you have muddling along without expressing your blog’s purpose can lead reader confusion and blogger burn-out. From the outset you need to be able to describe  your blog’s purpose by expressing what you intend to blog about in as few words as possible.
                            </p>
</h6>
<hr>
<a href="/blogs"><button type="button" class="btn btn-success" style="margin-left:auto 100px;border-radius:10px"><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Continue</button></a>
 <!-- Footer -->
 
<hr>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                    <br><br><br>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">All Rights Reserve 2017  <i class="fa fa-registered" aria-hidden="true"></i><br>La Verdad Christian College | Web Application Development<br>BS Information System</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
