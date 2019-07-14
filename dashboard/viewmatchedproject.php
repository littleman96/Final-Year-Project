<?php
	// We need to use sessions, so you should always start sessions using the below code.
	session_start();
	// If the user is not logged in redirect to the login page...
	if (!isset($_SESSION['studentloggedin'])) {
		header('Location: index.html');
		exit();
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Matched Projects</title>
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
					<li><a href="studenthome.php">Student Home</a></li>
					<li class="has-dropdown"><a href="#">View Projects</a>
				<ul class="dropdown">
					
					<li><a href="displayallprojects2.php">View all Projects</a></li>
					<li><a href="studentmatchedprojects.php">View Projects Matched / Completed
					<li><a href="studentprojectsappliedto.php"> View Projects Applied</a></li>
					
					</ul>
					<li class="has-dropdown"><a href="#">Project Matching</a>
					<ul class="dropdown">
					<li><a href="volunteerprojectmatching8.php">Match to a Project</a></li>
					</a></li></ul>
					
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
							<ul class="breadcrumb">
							
	<form action = "applied.php" method = "post">
	<?php
		
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
		
		
		$VolunteerProjectID = @$_POST[VolunteerProjectID];
			
		$sql = "SELECT * FROM volunteerprojects WHERE VolunteerProjectID = $VolunteerProjectID";
			
		$result = $con->query($sql);
		
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				echo "Project ID: " . $row['VolunteerProjectID'] . "<input type=\"text\"  name=\"VolunteerProjectID\" value= \"" .$row['VolunteerProjectID']."\" readonly style=\"display: none\"> ";
				echo "<br>Volunteer Project Name: " . $row["VolunteerProjectName"];
				echo "<br>";
				echo "<br>Volunteer Project Description: " . $row["VolunteerProjectDescription"];
				echo "<br>";
				echo "<br>Volunteer Project Skills Required: " . $row["VolunteerProjectSkillNeed1"]. ", " . $row["VolunteerProjectSkillNeed2"]. ", " . $row["VolunteerProjectSkillNeed3"];
				echo "<br>Volunteer Project Skills to Develop: " . $row["VolunteerProjectSkillDevelop1"]. ", " . $row["VolunteerProjectSkillDevelop2"]. ", " . $row["VolunteerProjectSkillDevelop3"];
				echo "<br>";
				
				echo"<br>Days of Volunteering: ";
				
				if($row["MonAM"] == "1")
				{
					echo" MonAM ";
				}
				if($row["MonPM"] == "1")
				{
					echo" MonPM ";
				}
				if($row["TueAM"] == "1")
				{
					echo" TueAM ";
				}
				if($row["TuePM"] == "1")
				{
					echo" TuePM ";
				}
				if($row["WedAM"] == "1")
				{
					echo" WedAM ";
				}
				if($row["WedPM"] == "1")
				{
					echo" WedPM ";
				}
				if($row["ThuAM"] == "1")
				{
					echo" ThuAM ";
				}
				if($row["ThuPM"] == "1")
				{
					echo" ThuPM ";
				}				
				if($row["FriAM"] == "1")
				{
					echo" FriAM ";
				}
				if($row["FriPM"] == "1")
				{
					echo" FriPM ";
				}
				if($row["SatAM"] == "1")
				{
					echo" SatAM ";
				}
				if($row["SatPM"] == "1")
				{
					echo" SatPM ";
				}
				if($row["SunAM"] == "1")
				{
					echo" SunAM ";
				}
				if($row["SunPM"] == "1")
				{
					echo" SunPM ";
				}				
				
				echo"<br>";
				
				echo "<br>Application Close Date: ". $row ["ApplicationCloseDate"];
				echo "<br>Start Date: " . $row ['StartDate'];
				echo"<br><br>";
				echo"<br>Building Number/Name: " . $row['Number'];
				echo"<br>Street: ". $row['Street'];
				echo"<br>Town: ". $row['Town'];
				echo"<br>Postcode: " . $row['Postcode'];
				
			}	
		}
		else
		{
			echo "no results";
		}
	?>
	<br>
	<input type="submit" value="Apply" required = "required">
	</form>
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