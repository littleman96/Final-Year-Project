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
		
		<br>
		
		<p><input type="submit" value="Match" required = "required"></input></p>
		</form>
		
		
		
    </body>
</html>