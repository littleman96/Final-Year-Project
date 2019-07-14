<!DOCTYPE html>
<html>
	<head>
		<title>Volunteer Project Matching</title>
		<link rel='stylesheet' type='text/css' href='style.php' />
	</head>
	<body>
		<?php
 
		//Connect to our MySQL database using the PDO extension.
		$pdo = new PDO('mysql:host=localhost;dbname=charity', 'root', '');
 
		//Our select statement. This will retrieve the data that we want.
		$sql = "SELECT VolunteerProjectSkillsID, VolunteerProjectSkill FROM volunteerprojectmatching";
 
		//Prepare the select statement.
		$stmt = $pdo->prepare($sql);
 
		//Execute the statement.
		$stmt->execute();
 
		//Retrieve the rows using fetchAll.
		$users = $stmt->fetchAll();
 
		?>
	

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
			<?php foreach($users as $user): ?>
			<option value="<?= $user['VolunteerProjectSkillsID']; ?>"><?= $user['VolunteerProjectSkill']; ?></option>
			<?php endforeach; ?>
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