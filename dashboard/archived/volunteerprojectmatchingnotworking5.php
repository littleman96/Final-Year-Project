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
	 
	$sql = "SELECT VolunteerProjectSkillsID, VolunteerProjectSkill FROM volunteerprojectskills";
    $query = mysqli_query($con, $sql);
    while ( $results[] = mysqli_fetch_object ( $query ) );
    array_pop ( $results );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Volunteer Project Matching</title>
		<link rel='stylesheet' type='text/css' href='style.css' />
	</head>
	<body>
        <ul>
            <h1>Volunteer Project Matching</h1>

            <li><a href=index.php>Home</a></li>
		    <li><a href=studentlogin.php>Student Login</a></li>
            <li><a href=studenthome.php>Student Home</a></li>
            <li><a href=studentuserdetails.php>Student User Details</a></li>
            <li><a href=volunteerprojectmatching.php>Volunteer Project Matching</a></li>
        </ul>
		
		
		<h2>Required Skills</h2>
		<form action="matchingalgorithm2.php" method="post" autocomplete="off">
		
		<select name="RequiredSkill1">
			<option value ="null">select</option>
			<?php foreach ( $results as $option ) : ?>
			<option value="<?php echo $option->VolunteerProjectSkillsID; ?>"><?php echo $option->VolunteerProjectSkill; ?></option>
			<?php endforeach; ?>
		</select>
		<select name="RequiredSkill2">
			<option value ="null">select</option>
			<?php foreach ( $results as $option ) : ?>
			<option value="<?php echo $option->VolunteerProjectSkillsID; ?>"><?php echo $option->VolunteerProjectSkill; ?></option>
			<?php endforeach; ?>
		</select>
		<select name="RequiredSkill3">
			<option value ="null">select</option>
			<?php foreach ( $results as $option ) : ?>
			<option value="<?php echo $option->VolunteerProjectSkillsID; ?>"><?php echo $option->VolunteerProjectSkill; ?></option>
			<?php endforeach; ?>
		</select>
		<br>
		
		<h2>Skills To Gain</h2>
		<select name="SkillGain1">
			<option value ="null">select</option>
			<?php foreach ( $results as $option ) : ?>
			<option value="<?php echo $option->VolunteerProjectSkillsID; ?>"><?php echo $option->VolunteerProjectSkill; ?></option>
			<?php endforeach; ?>
		</select>
		<select name="SkillGain2">
			<option value ="null">select</option>
			<?php foreach ( $results as $option ) : ?>
			<option value="<?php echo $option->VolunteerProjectSkillsID; ?>"><?php echo $option->VolunteerProjectSkill; ?></option>
			<?php endforeach; ?>
		</select>
		<select name="SkillGain3">
			<option value ="null">select</option>
			<?php foreach ( $results as $option ) : ?>
			<option value="<?php echo $option->VolunteerProjectSkillsID; ?>"><?php echo $option->VolunteerProjectSkill; ?></option>
			<?php endforeach; ?>
		</select>
		<br>
		
		<h2>Time available</h2>
		<p>MonAM<input type="radio" name="MonAM" value="male"/>
		MonPM<input type="radio" name="MonPM" value="male"/>
		TueAM<input type="radio" name="TueAM" value="male"/>
		TuePM<input type="radio" name="TuePM" value="male"/>
		WedAM<input type="radio" name="WedAM" value="male"/>
		WedPM<input type="radio" name="WedPM" value="male"/>
		ThuAM<input type="radio" name="ThuAM" value="male"/>
		ThuPM<input type="radio" name="ThuPM" value="male"/>
		FriAM<input type="radio" name="FriAM" value="male"/>
		FriPM<input type="radio" name="FriPM" value="male"/>
		SatAM<input type="radio" name="SatAM" value="male"/>
		SatPM<input type="radio" name="SatPM" value="male"/>
		SunAM<input type="radio" name="SunAM" value="male"/>
		SunPM<input type="radio" name="SunPM" value="male"/></p>
		
		
		<p>
		Postcode: <input type="text" name="Postcode"> Distance Range:
		<select name="DistanceRange">
			<option value="5">5 miles</option>
			<option value="10">10 miles</option>
			<option value="20">20 miles</option>
			<option value="30">30 miles</option>
		</select>
		</p>
		
		<p><input type="submit" value="Match" required = "required"></input></p>
		</form>
		
		
		
    </body>
</html>