<!DOCTYPE html>
<?php
	// We need to use sessions, so you should always start sessions using the below code.
	session_start();
	// If the user is not logged in redirect to the login page...
	if (!isset($_SESSION['charityloggedin']))
	{
		header('Location: index.html');
		exit();
	}
?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title>Create Projects</title>
		
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">	
	
	<link type="text/css" rel="stylesheet" href="Style/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="Style/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="Style/css/owl.theme.default.css" />
	<link rel="stylesheet" href="Style/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Style/css/style.css" />
	</head>
	<body>
	
		<nav id="main-navbar">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.html" ><img src="Style/img/logo.png" alt="logo"></a>
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
			
			<div id="page-header">
			<!-- section background -->
			<div class="section-bg" style="background-image: url(./img/background-2.jpg);"></div>
			<!-- /section background -->

			<!-- page header content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-content">
							<h2 style="color:black;"> These are your current projects. </h2>
<br> <h3>Please view/edit below.</h3>							
							<ul class="breadcrumb">
				<li class="active" style="color:black">
								
								<br>
								
								</li>
							</ul>	
		
		
		<form action = "editproject.php" method = "post">
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
					echo "<br><br> Project ID: <input type=\"text\"  name=\"VolunteerProjectID\" value= \"" .$row['VolunteerProjectID']."\" readonly> ";
					echo "<br><br> Project Name: <input type=\"text\" name=\"VolunteerProjectName\" value= \"". $row['VolunteerProjectName']. "\">";
					echo "<br><br> Project Description: <input type=\"text\" name= \"VolunteerProjectDescription\" value= \"" . $row['VolunteerProjectDescription']."\">";
					echo "<br><br> Skill Needed: <input type=\"text\" name=\"VolunteerProjectSkillNeed1\" value= \"" . $row['VolunteerProjectSkillNeed1'] . "\">";
					echo "<br><br> Skill Needed: <input type=\"text\" name=\"VolunteerProjectSkillNeed2\" value= \"" . $row['VolunteerProjectSkillNeed2']. "\">";
					echo "<br><br> Skill Needed: <input type=\"text\" name=\"VolunteerProjectSkillNeed3\" value= \"" . $row['VolunteerProjectSkillNeed3'] . "\">";
					echo "<br><br> Skill to Develop: <input type=\"text\" name=\"VolunteerProjectSkillDevelop1\" value= \"" . $row['VolunteerProjectSkillDevelop1']. "\">";
					echo "<br><br> Skill to Develop: <input type=\"text\" name=\"VolunteerProjectSkillDevelop2\" value= \"". $row['VolunteerProjectSkillDevelop2'] . "\">";
					echo "<br><br> Skill to Develop: <input type=\"text\" name=\"VolunteerProjectSkillDevelop3\" value=\"" . $row['VolunteerProjectSkillDevelop3'] . "\">";
					echo "<br> <br> Date & Times: <br> ";
					
					if ($row["MonAM"] == 0)
					{
						echo " MonAM: <input type = \"checkbox\" name = \"MonAM\" value = \"1\">";
						
					}
					else
						
					{
						echo " MonAM: <input type = \"checkbox\" name = \"MonAM\" value = \"1\" checked>";
					}
					
					
					if($row["MonPM"] == 0)
					{
						echo " MonPM: <input type = \"checkbox\" name = \"MonPM\" value = \"1\">";
					}
				
					else 
						
					{
						echo " MonPM: <input type = \"checkbox\" name = \"MonPM\" value = \"1\" checked>";
					}
					
					if($row["TueAM"] == 0)
					{
						echo " TueAM: <input type = \"checkbox\" name = \"TueAM\" value = \"1\">";
					}
					
					if($row["TueAM"] == 1)
					{
						echo " TueAM: <input type = \"checkbox\" name = \"TueAM\" value = \"1\" checked>";
					}
					
					
					if($row["TuePM"] == 0)
					{
						echo " TuePM: <input type = \"checkbox\" name = \"TuePM\" value = \"1\">";
					}
					
					if($row["TuePM"] == 1)
					{
						echo " TuePM: <input type = \"checkbox\" name = \"TuePM\" value = \"1\" checked>";
					}
					
					
					if($row["WedAM"] == 0)
					{
						echo " WedAM: <input type = \"checkbox\" name = \"WedAM\" value = \"1\">";
					}
					
					if($row["WedAM"] == 1)
					{
						echo " WedAM: <input type = \"checkbox\" name = \"WedAM\" value = \"1\" checked>";
						
					}
					
					
					if($row["WedPM"] == 0)
					{
						echo " WedPM: <input type = \"checkbox\" name = \"WedPM\" value = \"1\">";
					}
					
					if($row["WedPM"] == 1)
					{
						echo " WedPM: <input type = \"checkbox\" name = \"WedPM\" value = \"1\" checked>";
					}
					
					if($row["ThuAM"] == 0)
					{
						echo " <br> <br> ThuAM: <input type = \"checkbox\" name = \"ThuAM\" value = \"1\">";
					}
					
					if($row["ThuAM"] == 1)
					{
						echo " ThuAM: <input type = \"checkbox\" name = \"ThuAM\" value = \"1\" checked>";
						
					}
					
					if($row["ThuPM"] == 0)
					{
						echo " ThuPM: <input type = \"checkbox\" name = \"ThuPM\" value = \"1\">";
					}
					
					if($row["ThuPM"] == 1)
					{
						echo " ThuPM: <input type = \"checkbox\" name = \"ThuPM\" value = \"1\" checked>";
					}
					
					if($row["FriAM"] == 0)
					{
						echo " FriAM: <input type = \"checkbox\" name = \"FriAM\" value = \"1\">";
					}
					
					if($row["FriAM"] == 1)
					{
						echo " FriAM: <input type = \"checkbox\" name = \"FriAM\" value = \"1\" checked>";
						
					}
					
					if($row["FriPM"] == 0)
					{
						echo " FriPM: <input type = \"checkbox\" name = \"FriPM\" value = \"1\">";
					}
					
					if($row["FriPM"] == 1)
					{
						echo " FriPM: <input type = \"checkbox\" name = \"FriPM\" value = \"1\" checked>";
					}
					
					if($row["SatAM"] == 0)
					{
						echo " SatAM: <input type = \"checkbox\" name = \"SatAM\" value = \"1\">";
					}
					
					if($row["SatAM"] == 1)
					{
						echo " SatAM: <input type = \"checkbox\" name = \"SatAM\" value = \"1\" checked>";
						
					}
					
					if($row["SatPM"] == 0)
					{
						echo " SatPM: <input type = \"checkbox\" name = \"SatPM\" value = \"1\">";
					}
					
					if($row["SatPM"] == 1)
					{
						echo " SatPM: <input type = \"checkbox\" name = \"SatPM\" value = \"1\" checked>";
					}
					
					if($row["SunAM"] == 0)
					{
						echo " SunAM: <input type = \"checkbox\" name = \"SunAM\" value = \"1\">";
					}
					
					if($row["SunAM"] == 1)
					{
						echo " SunAM: <input type = \"checkbox\" name = \"SunAM\" value = \"1\" checked>";
						
					}
					
					if($row["SunPM"] == 0)
					{
						echo " SunPM: <input type = \"checkbox\" name = \"SunPM\" value = \"1\">";
					}
					
					if($row["SunPM"] == 1)
					{
						echo " SunPM: <input type = \"checkbox\" name = \"SunPM\" value = \"1\" checked>";
					}
					
					
					
					echo "<br><br> Application Closes: <input type=\"date\" name=\"ApplicationCloseDate\" value=\"" . $row['ApplicationCloseDate'] . "\">";
					
					echo "<br><br> Volunteering Project Start Date: <input type=\"date\" name=\"StartDate\" value=\"" . $row['StartDate'] . "\">";
					
					
				
					
					
					echo "<br><br> Building Number/Name: <input type=\"text\" name=\"Number\" value= \"" . $row['Number'] . "\">";
					echo "<br><br> Street: <input type=\"text\" name=\"Street\" value= \"" . $row['Street'] . "\">";
					echo "<br><br> Town: <input type=\"text\" name=\"Town\" value= \"" . $row['Town'] . "\">";
					echo "<br><br> Postcode: <input type=\"text\" name=\"Postcode\" value= \"" . $row['Postcode']. "\">";
					echo "<br><br> Created by: <input type=\"text\" name=\"CreatedBy\" value= \"".$row['CreatedBy'] . "\" readonly>";
				}	
			}
			else
			{
				echo "no results";
			}
?>
<br>
<input type="submit" value ="Edit" required = "required">
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
