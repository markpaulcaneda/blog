<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Blog</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('Bootstrap/css/bootstrap.min.css') }}">
</head>
<body>

<style>
html, body {
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
}

.bg {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    to bottom right,  
    #2C3E50, #FD746C, 
    #FF8235, #ffff1c, 
    #92FE9D, #00C9FF, 
    #a044ff, #e73827);
  background-repeat: no-repeat;
  background-size: 1000% 1000%;
  animation: gradient 240s ease infinite;
}

h1 {
  padding: 0;
  margin: 0;
  color: white;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 100;
}
    
@keyframes gradient { 
  0%{background-position:0% 0%}
  50%{background-position:100% 100%}
  100%{background-position:0% 0%}
}


body {
	font-family: 'Montserrat', sans-serif;
  
}

.col h2 {
	font-family: 'Montserrat', sans-serif;
	text-align: left;
	font-weight: 100;
	margin-bottom: 30px;
}

p {
	font-family: 'Montserrat', sans-serif;
	font-size: 11px;
	text-align: left;
	font-weight: 300;
	color: grey;
	line-height: 2em;
	letter-spacing: .1em;
}

.customer-order, .customer-pay, .customer-info {
	padding: 20px;
	margin-top: 30px;
	background-color: white;
	border: .5px solid #cccccc;
	width: 50%;
}

.btn {
	
	text-transform: uppercase;
	font-weight: 300;
	font-family: 'Montserrat', sans-serif;
	letter-spacing: .1em;
	font-size: 8px;
}

.btn:hover {
	background-color: #ffffff;
	text-transform: uppercase;
	font-weight: 500;
	font-family: 'Montserrat', sans-serif;
	letter-spacing: .1em;
	border: 1px solid #555555;
}

.customer-order {
	position: fixed;
	margin-right: 100px;
}

.fa {
	padding: 5px;
	margin: 0px 0px 30px 0px;
  text-align: left;
  color: #555555;
}

#accept, label {
	text-transform: uppercase;
	font-size: 11px;
	font-family: 'Montserrat', sans-serif;
	font-weight: 700;
	color: #555555;
	letter-spacing: .1em;
}




</style>


<div class="bg">
 
			<div class="customer-pay">
				<h2>Edit This Blog!</h2>
				<hr>
				<form method="POST" action="/save-blog">
				{{ csrf_field() }}	
				<input type="text" name="id" value="{{ $blog->id}}" hidden>

				<div class="form-group">
					<label>Title:</label> 
					<input class="form-control" type="text" name="title" value="{{ $blog->title }}">
				</div>


				<div class="form-group">
					<label>Author:</label> 
					<input class="form-control" type="text" name="author" value="{{ $blog->author }}">
				</div>


				<div class="form-group">
					<label>Content:</label> 
					<input class="form-control"  type="text" name="content" value="{{ $blog->content }}">
				</div>

				<div class="form-group">
					<label>Subtitle:</label> 
					<input class="form-control" type="text" name="subtitle" value="{{ $blog->subtitle }}">
				</div>

				<div class="form-group">
					<label>Date Published:</label> 
					<input class="form-control" type="text" name="date" value="{{ $blog->date }}">
				</div>
				<button class="btn btn-default" type="submit">Submit</button>
			    </div>
			    </form>
	</div>
  
</div>
  
	<script src="https://use.fontawesome.com/83fc84333f.js">
	</script>
<script>
var input = document.querySelector('input');

input.addEventListener('keydown', autosize);
             
function autosize(){
  var el = this;
  setTimeout(function(){
    el.style.cssText = 'height:auto; padding:5';
    el.style.cssText = 'height:' + el.scrollHeight + 'px';
  },5);
}
</script>
</body>
</html>