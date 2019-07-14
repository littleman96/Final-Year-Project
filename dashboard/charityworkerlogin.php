<!DOCTYPE html>
<html>
	<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
		<title>Charity Worker Login</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">	
	
	<link type="text/css" rel="stylesheet" href="Style/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="Style/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="Style/css/owl.theme.default.css" />
	<link rel="stylesheet" href="Style/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Style/css/style.css" />
		<link rel='stylesheet' type='text/css' href='Style/css/login.css' />
	</head>
	<body>

        <ul>
            <h1>Charity Worker Login</h1>
            
           	<header>
		<!-- NAVGATION -->
		<nav id="main-navbar">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.html"><img src="Style/img/logo.png" alt="logo"></a>
					</div>
					<!-- Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle-btn">
							<i class="fa fa-bars"></i>
						</button>
					<!-- Mobile toggle -->

					
				</div>
		  <!-- Nav menu -->
				<ul class="navbar-menu nav navbar-nav navbar-right">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					
					<li class="has-dropdown"><a href="#">Charity</a>
						<ul class="dropdown">
						<li><a href="charityworkerhome.php">Charity Home</a></li>
							<li><a href="charityworkerlogin.php">Log In</a></li>
							
							<li><a href="charityworkernewaccount.php">Register</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#">Student</a>
						<ul class="dropdown">
						<li><a href="studenthome.php">Student</a>
							<li><a href="StudentLogin.php">Log In</a></li>
							
							<li><a href="studentnewaccount.php">Register</a></li>
						</ul>
					</li>
						
					</li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<!-- Nav menu -->
			</div>
		</nav>
      
        </ul>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate_charity.php" method="post">
				<label for="CharityUsername">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="CharityUsername" placeholder="Username" id="CharityUsername" required>
				<label for="CharityPassword">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="CharityPassword" placeholder="Password" id="CharityPassword" required>
				<input type="submit" value="Login">
			</form>
		</div>
		
		<center><p><h2 style="color:white;"> New Users Please <a href=charityworkernewaccount.php> <h2 style="color:white;">Register Here </a> </h2></p> </Center>
		
	<!-- FOOTER -->
	<footer id="footer" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer contact -->
				<div class="col-md-4">
					<div class="footer">
						<div class="footer-logo">
							<a class="logo" href="#"><img src="Style/img/logo.png" alt=""></a>
						</div>
						<p>Use the contact information below if you have any queries.</p>
						<ul class="footer-contact">
							<li><i class="fa fa-map-marker"></i> Univeristy of Hull</li>
							<li><i class="fa fa-phone"></i> <a href = "tel:01484 2346311">01484 2346311</a></li>
							<li><i class="fa fa-envelope"></i> <a href="mailto:voluntario.volunteering@gmail.com">voluntario.volunteering@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer contact -->

			

				<!-- footer newsletter -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Newsletter</h3>
						<p>Subscribe to our newsletter to get updates on Voluntario and various volunteering projects.</p>
						<form class="footer-newsletter">
							<input class="input" type="email" placeholder="Enter your email">
							<button class="primary-button">Subscribe</button>
						</form>
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer newsletter -->
			</div>
			<!-- /row -->

			<!-- footer copyright & nav -->
			<div id="footer-bottom" class="row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="charityworkerhome.php">Charity Home Page</a></li>
						<li><a href="studenthome.php">Student Home Page</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>

				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">
						<span>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
</span>
					</div>
				</div>
			</div>
			<!-- /footer copyright & nav -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="Style/js/jquery.min.js"></script>
	<script src="Style/js/bootstrap.min.js"></script>
	<script src="Style/js/owl.carousel.min.js"></script>
	<script src="Style/js/jquery.stellar.min.js"></script>
	<script src="Style/js/main.js"></script>

</body>

</html>