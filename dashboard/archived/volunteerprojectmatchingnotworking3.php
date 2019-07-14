<!DOCTYPE html>
<html>
	<head>
		<title>Volunteer Project Matching</title>
		<link rel='stylesheet' type='text/css' href='style.php' />
	</head>
	<body>
        <ul>
            <h1>Volunteer Project Matching</h1>

            <li><a href=index.php>Home</a></li>
		    <li><a href=studentlogin.php>Student Login</a></li>
            <li><a href=charityworkerlogin.php>Charity Worker Login</a></li>
            <li><a href=studenthome.php>Student Home</a></li>
            <li><a href=studentuserdetails.php>Student User Details</a></li>
            <li><a href=volunteerprojectmatching.php>Volunteer Project Matching</a></li>
        </ul>
		
		
		<h2>Current Skills</h2>
		<form action="volunteerprojectmatching.php" method="post" autocomplete="off">
		
		<?php
		
			$DATABASE_HOST = 'localhost';
			$DATABASE_USER = 'root';
			$DATABASE_PASS = '';
			$DATABASE_NAME = 'charity';
	
			// Try and connect using the info above.
			$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
			if (mysqli_connect_errno())
			{
				// If there is an error with the connection, stop the script and display the error.
				die ('Failed to connect to MySQL: ' . mysqli_connect_error());
			}

			$sql="SELECT VolunteerProjectSkillsID,VolunteerProjectSkill FROM volunteerprojectskills order by VolunteerProjectSkill"; 

			/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

			echo "<select name=student value=''>Skill</option>"; // list box select command

			foreach ($dbo->query($sql) as $row)
			{//Array or records stored in $row

				echo "<option value=$row[VolunteerProjectSkillsID]>$row[VolunteerProjectSkill]</option>"; 

				/* Option values are added by looping through the array */ 

			}

			echo "</select>";// Closing of list box
			
		?>
		<select>
			<option value="">select</option>
		</select>
		<select>
			<option value="">select</option>
		</select>
		<br>
		
		<h2>Skills To Gain</h2>
		<select>
			<option value="">select</option>
		</select>
		<select>
			<option value="">select</option>
		</select>
		<select>
			<option value="">select</option>
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
		
		</form>
		
		
		
    </body>
</html>