<!DOCTYPE html>
<?php
	// We need to use sessions, so you should always start sessions using the below code.
	session_start();
	// If the user is not logged in redirect to the login page...
	if (!isset($_SESSION['studentloggedin'])) {
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
	 
	$sql = "SELECT DISTINCT Skill FROM skills ORDER BY Skill ASC";
    $query = mysqli_query($con, $sql);
    while ( $results[] = mysqli_fetch_object ( $query ) );
    array_pop ( $results );
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Project Matching</title>
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
							<h1 style="color:black;">Project Matching</h1>
							<ul class="breadcrumb">
							
							<li class="active" style="color:black">
								<br>  You can select the options below to find the volunteering project best for you.
								<br>
								<br>
								<br>
								
								</li>
							</ul>

			<form action="matchingalgorithm4.php" method="post">
			<h2>Skills you currently have</h2>
			<select name="VolunteerProjectSkillNeed1">
			<option value ="null">select</option>
			<?php foreach ( $results as $option ) : ?>
			<option value="<?php echo $option->Skill; ?>"><?php echo $option->Skill; ?></option>
			<?php endforeach; ?>
			</select>
			
			<select name="VolunteerProjectSkillNeed2">
			<option value ="null">select</option>
			<?php foreach ( $results as $option ) : ?>
			<option value="<?php echo $option->Skill; ?>"><?php echo $option->Skill; ?></option>
			<?php endforeach; ?>
			</select>
			
			<select name="VolunteerProjectSkillNeed3">
			<option value ="null">select</option>
			<?php foreach ( $results as $option ) : ?>
			<option value="<?php echo $option->Skill; ?>"><?php echo $option->Skill; ?></option>
			<?php endforeach; ?>
			</select>
			
			<h2>Skills to Develop</h2>
			<select name="VolunteerProjectSkillDevelop1">
			<option value ="null">select</option>
			<?php foreach ( $results as $option ) : ?>
			<option value="<?php echo $option->Skill; ?>"><?php echo $option->Skill; ?></option>
			<?php endforeach; ?>
			</select>
			
			<select name="VolunteerProjectSkillDevelop2">
			<option value ="null">select</option>
			<?php foreach ( $results as $option ) : ?>
			<option value="<?php echo $option->Skill; ?>"><?php echo $option->Skill; ?></option>
			<?php endforeach; ?>
			</select>
			
			<select name="VolunteerProjectSkillDevelop3">
			<option value ="null">select</option>
			<?php foreach ( $results as $option ) : ?>
			<option value="<?php echo $option->Skill; ?>"><?php echo $option->Skill; ?></option>
			<?php endforeach; ?>
			</select>
			
			<br>
			<h2>Days Available</h2>
			<p>
				MonAM<input type="checkbox" name="MonAM" value="1"/>
				MonPM<input type="checkbox" name="MonPM" value="1"/>
				TueAM<input type="checkbox" name="TueAM" value="1"/>
				TuePM<input type="checkbox" name="TuePM" value="1"/>
				WedAM<input type="checkbox" name="WedAM" value="1"/>
				WedPM<input type="checkbox" name="WedPM" value="1"/>
				ThuAM<input type="checkbox" name="ThuAM" value="1"/>
				ThuPM<input type="checkbox" name="ThuPM" value="1"/>
				FriAM<input type="checkbox" name="FriAM" value="1"/>
				FriPM<input type="checkbox" name="FriPM" value="1"/>
				SatAM<input type="checkbox" name="SatAM" value="1"/>
				SatPM<input type="checkbox" name="SatPM" value="1"/>
				SunAM<input type="checkbox" name="SunAM" value="1"/>
				SunPM<input type="checkbox" name="SunPM" value="1"/>
			</p>
			<h2>Location</h2>
			Postcode: <input type = "text" name = "Postcode">
			<select name = "Distance">
				<option>Select</option>
				<option value = "1">1 Mile</option>
				<option value = "5">5 Mile</option>
				<option value = "10">10 Mile</option>
				<option value = "15">15 Mile</option>
			</select>
			<br>
			<input type="submit" value="Search" required = "required">
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