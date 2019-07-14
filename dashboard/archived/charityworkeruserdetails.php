<!DOCTYPE html>
<html>
	<head>
		<title>Charity Worker User Details</title>
		<link rel='stylesheet' type='text/css' href='style.php' />
	</head>
	<body>

        <ul>
            
            <li><a href=index.php>Home</a></li>
            <li><a href=charityworkerlogin.php>Charity Worker Login</a></li>
            <li><a href=charityworkerhome.php>Charity Home</a></li>
            <li><a href=charityworkerdetails.php>Charity Worker User Details</a></li>
            <li><a href=projectcreator.php>Project Creation / Edit</a></li>
        </ul>
		
		<h2>User Details</h2>
		<p>
		<form action="" method="post">
		Forename:<input type="text" name="CharityUserForename"><br>
		Surname:<input type="text" name="CharityUserSurname"><br>
		Charity Name:<input type="text" name="CharityName"><br>
		Password<input type="text" name="CharityPassword"><br>
		Emaill<input type="text" name="CharityEmail">
		<input type="submit" value="Update Details" required = "required">
		</form>
        </p>
    </body>
</html>
