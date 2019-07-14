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
		
		<select name="CurrentSkill1">
		<?php
			try
			{
				/*** query the database ***/
				$result = DB::getInstance()->query("SELECT atomicnumber, english FROM elements");

				/*** loop over the results ***/
				foreach($result as $row)
				{
					/*** create the options ***/
					echo '<option value="'.$row['atomicnumber'].'"';
					if($row['atomicnumber']==42)
					{
						echo ' selected';
					}
					echo '>'. $row['english'] . '</option>'."\n";
				}
			}
			catch(PDOException $e)
			{
				echo 'No Results';
			}
		?>
		</select>
		
		
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