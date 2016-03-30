<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- STYLES -->
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body onload="myFunc()">
		
		<div class="wrapper">
		
			<div id="bg">
			  <img src="images/bg.jpg" alt="One Game">
			</div>

			<div id="logo">
				<img src="images/logo.png" alt="One Game Online Thrill">
			</div>
			

			<div class="nav-line">
			</div>	
			
			<a href="#" id="myBtn"><img src="images/modalup.png"></img></a>
			<a href="#" id="myBtn1"><img src="images/modaldown.png"></img></a>

			<div id="modalbox">
				</br>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p><span class="clicknjoin">&copy; Click N Join 2016</span></p>
				</br>
			</div>
			
			<nav class="navbar navbar-inverse navbar-fixed-bottom">
				  <div class="container-fluid wrapper2">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					  </button>
					  <div class="navbar-color"></div>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
					  <ul class="nav navbar-nav navbar-left">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li class="active"><a href="games.php">Games</a></li>
						<li><a href="contact.php">Contact</a></li>
					  </ul>
					  <ul class="nav navbar-nav mediaicons">
						<li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-youtube"></a></li>
						<li><a href="#" class="fa fa-google-plus"></a></li>
					  </ul>					  
					  <ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="fa fa-pencil-square-o"></span>&nbsp Join Us</a></li>
						<li><a href="#"><span class="fa fa-sign-in"></span>&nbsp Login</a></li>
					  </ul>
					</div>
				  </div>
				</nav>	
			
			<div id="leftarrow"><img src="images/leftarrow.png" width="75" height="90" onclick="goBack()"></img></div>
			<div id="rightarrow"><img src="images/rightarrow.png" width="75" height="90" onclick="goNext()"></img></div>
			
			<div>
				<img src="images/aline.png" id="line"></img>				
			</div>
			
			<div id="ball">
				<marquee behavior="alternate" scrollamount="25"><img src="images/lineball.png"></img></marquee>
			</div>
						
			<div class="container-fluid wrapper2" id="intro-hero">
				<div class="row">
					<div class="col-md-8">
						<h1>Something <span id="awesome"><strong>really awesome</strong></span> is </br>coming <span id="soon"><strong>very soon</strong></span>.</h1>
						<div id="text-container">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						</div>
					</div>
					<div class="col-md-4">
							
					</div>
				</div>
				
			</div>
			
		</div>
		
	<!-- SCRIPTS -->
	<script src="js/jQuery.js"></script>
	<script src="js/app.js"></script>
	<script src="js/date.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<!-- Preloader -->
	<script type="text/javascript">
			$(window).load(function() { // makes sure the whole site is loaded
				$('#status').fadeOut('slow'); // will first fade out the loading animation
				$('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
				$('body').delay(350).css({'overflow':'visible'});
			})
	</script>
</body>
</html>
