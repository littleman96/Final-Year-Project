<!DOCTYPE html>
<html>
	<head>
		<title>Student User Details</title>
		<link rel='stylesheet' type='text/css' href='style.php' />
	</head>
	<body>

        <ul>
            <h1>Student User Details</h1>

            <li><a href=index.html>Home</a></li>
            <li><a href=studenthome.php>Student Home</a></li>
            <li><a href=studentuserdetails.php>Student User Details</a></li>
            <li><a href=volunteerprojectmatching.php>Volunteer Project Matching</a></li>
        </ul>
		
		<h2>User Details<h2>
		
		<p>
		<form action="" method="post">
		Forename:<input type="text" name="StudentForename"><br>
		Surname:<input type="text" name="StudentSurname"><br>
		House Number/Name<input type="text" name="Number"><br>
		Street<input type="text" name="Street"><br>
		Town<input type="text" name="Town"><br>
		Postcode<input type="text" name="Postcode"><br>
		Password<input type="text" name="StudentPassword"><br>
		Email<input type="text" name="StudentVolunteerEmail">
		<input type="submit" value="Insert Details" required = "required">
		</form>
        </p>
    </body>
</html>