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
				
				$sql = "SELECT DISTINCT VolunteerProjectSkill From volunteerprojectskills";
				$result = mysqli_query ($con, $sql) or die ("Bad SQL: $sql");
				$opt = "<select name='skill'>";
				while($row = mysqli_fetch_assoc ($result)) {
						$opt .= "<option value='{$row['VolunteerProjectSkill']}'>{$row['VolunteerProjectSkill']}</option>";
					
				}
				
				$opt .= "</select>"
				
			?><!DOCTYPE html>
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
		
	
		<h2>Skills To Gain</h2>
		<form action="volunteerprojectmatching.php" method="post" autocomplete="off">
		<select>
			<option value="null">select</option>
			
		</select>
		<select>
			<option value="">select</option>
		</select>
		<select>
			<option value="">select</option>
		</select>
		<br>
		
		<h2>Current Skills</h2>
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