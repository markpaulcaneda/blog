<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/MyCSS.css">

</head>

<body>
  <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
            </button>
         <a class="navbar-brand" href="/blogs"><span class="fa-stack fa-lg">
     <i class="fa fa-book fa-stack-1x fa-inverse"></i></span>Blog
  </a>
</div>
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="font-family:'Raleway', sans-Serif">
                  <li>
                      <a href="/home">Home</a>
                  </li>
                  <li>
                      <a href="/profiles">Profiles</a>
                  </li>
                  <li>
                      <a href="/portfolios">Portfolio</a>
                  </li>
                  <li>
                      <a href="/developers">Developer</a>
                  </li>
            </ul>
        </div>
    </div>
</nav>
  <header class="intro-header" style="background-image: url('Img/home-bg.jpg');background-attachment:fixed;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @if (Session::has('flash_message'))
                  <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                  {{ Session::get('flash_message') }}
                  </div>
                @endif
                    <div class="site-heading">
                        <h1 style="font-family:Edwardian Script ITC">Make Your Reflection</h1>
                        <hr class="long">
                        <span class="subheading">Create Your Own Stunning Web Blog's</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@if (Session::has('flash_message'))
        <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></span></button>
        {{ Session::get('flash_message') }}
        </div>
@endif
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">
<span class="fa-stack fa-lg">
    <i class="fa fa-book fa-stack-1x fa-inverse"></i></span>
  Make a Blog
</button>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">Make Your Blog</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="modal-body">
      	<form method="POST" action="/post-blog">
      		  {{ csrf_field() }}
       	 	  <input type="text" name="title" class="form-control" placeholder="Title..." required><br>
        	  <input type="text" name="author" class="form-control" placeholder="Author's Name..." required><br>
            <textarea type="text" name="content" rows="4" class="form-control" placeholder="Content..." required></textarea><br>
            <textarea type="text" name="subtitle" rows="4" class="form-control" placeholder="Subtitle..." required></textarea><br>
            <input type="text" name="date" class="form-control" placeholder="Date Published..." required><br>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@if (Session::has('flash_message'))
      <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></span></button>
      {{ Session::get('flash_message') }}
      </div>
 @endif

<div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
               @foreach ($blogs as $blog)
                <div class="post-preview">
                    <a href="/blogs">
                        <h2 class="post-title">
                            {{ $blog->title }}
                        </h2>
                        </a>
                        <h3 class="post-subtitle">
                            {{ $blog->subtitle }}
                        </h3>
                <p class="post-meta">Posted by {{ $blog->author }} on {{ $blog->date }}</p>
              <p class="post-meta">
            {{ $blog->content }}
        </p>
    </div>
<a href="/edit/{{ $blog->id }}" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true">&nbsp;Edit</a></i>
<a href="/delete/{{ $blog->id }}" class="btn btn-danger"><i class="fa fa-pencil-square-o" aria-hidden="true">&nbsp;Delete</a></i>
<hr>
@endforeach
<ul class="pager">
  <li class="next">
    <a href="#">Older Posts &rarr;</a>
      </li>
        </ul>
      </div>
    </div>
  </div>
<hr>

<div id="lightbox">
  <h1>Here's Are Some of My Portfolio's</h1>
  <ul>
    <li>
      <img src="http://thecodeplayer.com/uploads/media/lb1_small.png" data-large="http://thecodeplayer.com/uploads/media/lb1.png"/>
      <div class="image_title">
        <h5 class="title">Ceiling Art</h5>
      </div>
    </li>
    <li>
      <img src="http://thecodeplayer.com/uploads/media/lb2_small.png" data-large="http://thecodeplayer.com/uploads/media/lb2.png"/>
      <div class="image_title">
        <h5 class="title">Lit Curtain</h5>
      </div>
    </li>
    <li>
      <img src="http://thecodeplayer.com/uploads/media/lb3_small.png" data-large="http://thecodeplayer.com/uploads/media/lb3.png"/>
      <div class="image_title">
        <h5 class="title">Ornamental Lights</h5>
      </div>
    </li>
    <li>
      <img src="http://thecodeplayer.com/uploads/media/lb4_small.png" data-large="http://thecodeplayer.com/uploads/media/lb4.png"/>
      <div class="image_title">
        <h5 class="title">Cube Light</h5>
      </div>
    </li>
    <li>
      <img src="http://thecodeplayer.com/uploads/media/lb5_small.png" data-large="http://thecodeplayer.com/uploads/media/lb5.png"/>
      <div class="image_title">
        <h5 class="title">Damask 14</h5>
      </div>
    </li>
    <li>
      <img src="http://thecodeplayer.com/uploads/media/lb6_small.png" data-large="http://thecodeplayer.com/uploads/media/lb6.png"/>
      <div class="image_title">
        <h5 class="title">Dark Lamp</h5>
      </div>
    </li>
  </ul>
</div>
<hr>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
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
                    <p class="copyright text-muted">All Rights Reserve 2017 &copy;<br>La Verdad Christian College | Web Application Development<br>BS Information System</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/clean-blog.min.js"></script>
    <script src="js/BlogJS.js"></script>
    
</body>
</html>
