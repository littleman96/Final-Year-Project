<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Applicants</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">	
		
		<link type="text/css" rel="stylesheet" href="Style/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="Style/css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="Style/css/owl.theme.default.css" />
		<link rel="stylesheet" href="Style/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="Style/css/style.css" />
	</head>	
	<body>
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
			<li><a href="charityworkerhome.php">Charity Worker Home</a></li>
			<li class="has-dropdown"><a href="#">Projects</a>
				<ul class="dropdown">
					<li><a href="projectcreator.php">Project Creation</a></li>
					<li><a href="viewproject.php">View/Edit Project</a></li>
				</ul>
			</li>
			<li class="has-dropdown"><a href="#">Project Matching</a>
				<ul class="dropdown">
					<li><a href="charityprojectmatchedto.php">View Projects Applied to</a></li>
					<li><a href="charitystudentforeachprojectdropdown.php">View Projects Matched with Students</a></li>
				</ul>
			</li>
			<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul>
				<!-- Nav menu -->
			</div>
		</nav>

	<br>
		<br>
		
	<div id="page-header">
			<!-- section background -->
			<div class="section-bg" style="background-image: url(./img/background-2.jpg);"></div>
			<!-- /section background -->

			<!-- page header content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-content">
							<h1 style="color:black;"> Volunteer Project Applicants</h1>
							<ul class="breadcrumb">
							
							<li class="active" style="color:black">
								<br>  You can view all the projects created. And if needed update the project.
								<br>
								<br>
								<br>
								
								</li>
							</ul>
		
		<?php
			// We need to use sessions, so you should always start sessions using the below code.
			session_start();
			// If the user is not logged in redirect to the login page...
			if (!isset($_SESSION['charityloggedin']))
			{
				header('Location: index.html');
				exit();
			}
			
			$DATABASE_HOST = 'localhost';
			$DATABASE_USER = 'root';
			$DATABASE_PASS = '';
			$DATABASE_NAME = 'charity';
			
			$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
			if (mysqli_connect_errno())
			{
				// If there is an error with the connection, stop the script and display the error.
				die ('Failed to connect to MySQL: ' . mysqli_connect_error());
			}
			
			$VolunteerProjectID = $_POST['VolunteerProjectID'];
			$sql = "SELECT * FROM studentvolunteerusernames s, applied a WHERE s.StudentUsername = a.StudentUsername AND a.VolunteerProjectID = '$VolunteerProjectID'";
			
			
			$result = $con->query($sql);
			
			if ($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					echo "<form action=\"volunteermatchedwithproject.php\" method=\"post\">";
					echo "<input type = \"text\" name = \"VolunteerProjectID\" value =\"" . $VolunteerProjectID . "\" readonly style=\"display: none\">" ;
					echo "<br>Applicant Username: " . $row['StudentUsername'] . "<input type = \"text\" name = \"StudentUsername\" value =\"" . $row['StudentUsername']. "\" readonly style=\"display: none\">" ;
					echo "<br>Applicant Email: <a href=\"mailto:" . $row['StudentVolunteerEmail'] . "\">" . $row['StudentVolunteerEmail'] ."</a>  ";
					echo "<br><input type=\"submit\" value =\"Match\" required = \"required\">";
					echo "</form>";
					echo "<br>";
					echo "<br>";
				}
			}
			else
			{
				echo "no results";
			}					
		?>
		</div>
			</div>
		
	
		</div>
			</div>
			<!-- /page header content -->
		</div>	
							
			</div>
			</div>
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
		</header>
	<!-- /SECTION -->

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
							<li><i class="fa fa-map-marker"></i> University of Hull</li>
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