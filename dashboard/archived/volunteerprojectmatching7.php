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
	 
	$sql = "SELECT DISTINCT Skill FROM skills ORDER BY Skill ASC";
    $query = mysqli_query($con, $sql);
    while ( $results[] = mysqli_fetch_object ( $query ) );
    array_pop ( $results );
?>
<html>
	<head>
		<title>Project Matching</title>
	</head>
	<body>
		<ul class="navbar-menu nav navbar-nav navbar-right">
			<li><a href="index.html">Home</a></li>
			<li><a href="studenthome.php">Student Home</a></li>
			<li><a href=studentuserdetails.php>Student User Details</a></li>
			<li><a href=volunteerprojectmatching.php>Volunteer Project Matching</a></li>
			<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
		</ul>
		<h1>Matching</h1>
		
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
			<input type = "text" name = "Postcode">
			<select name = "Distance">
				<option>Select<option>
				<option value = "1">1 Mile</option>
				<option value = "5">5 Mile</option>
				<option value = "10">10 Mile</option>
				<option value = "15">15 Mile</option>
			</select>
			<br>
			<input type="submit" value="Search" required = "required">
		</form>
	</body>
</html>