<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel Twitter</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container col-md-8 col-md-offset-2">
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<ul class="nav navbar-nav">
				<li id="menu_home"><a href="./">Home</a></li>
				<li id="menu_twits"> <a href="./twits">Last twits</a></li>
				<li id="menu_write"><a href="./write">Write a twit!</a></li>
			</ul>
	 	</div>
	</nav>
	@yield('content')
	</div>
</body>
</html>
