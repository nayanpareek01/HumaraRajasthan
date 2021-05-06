<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">


		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index">Padharo Rajsthan</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="about.php">About Us</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="signup.php">Sign Up</a></li>
				<li><a href="socialmedia.php">Social Media</a></li>
				<li style="float:right;margin-left:300px; margin-top:1%;">
					<form method="GET" action="searchresult.php">
						<input type="text" placeholder="Enter place you want to visit" name="query">
						<button type="submit" class="btn btn-primary  mb-2">Search</button>
					</form>
				</li>

			</ul>
		</div>
	</div>
</nav>