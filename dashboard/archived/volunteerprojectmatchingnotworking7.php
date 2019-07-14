<!DOCTYPE html>
<?php
	// We need to use sessions, so you should always start sessions using the below code.
	session_start();
	// If the user is not logged in redirect to the login page...
	if (!isset($_SESSION['loggedin'])) {
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
	 
	$sql = "SELECT DISTINCT VolunteerProjectSkillNeed1, VolunteerProjectSkillNeed2, VolunteerProjectSkillNeed3, VolunteerProjectSkillDevelop1, VolunteerProjectSkillDevelop2 FROM volunteerprojects";
    $query = mysqli_query($con, $sql);
    while ( $results[] = mysqli_fetch_object ( $query ) );
    array_pop ( $results );
?>
<html>
	<head>
	</head>
	<body>
		<ul class="navbar-menu nav navbar-nav navbar-right">
			<li><a href="index.html">Home</a></li>
			<li><a href="studenthome.php">Student Home</a></li>
			<li><a href=studentuserdetails.php>Student User Details</a></li>
			<li><a href=volunteerprojectmatching.php>Volunteer Project Matching</a></li>
			<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
		</ul>
	</body>
</html>