<html>
	<head>
		<title>all Projects</title>
	</head>
	<body>
		<?php
			$DATABASE_HOST = 'localhost';
			$DATABASE_USER = 'root';
			$DATABASE_PASS = '';
			$DATABASE_NAME = 'charity';
			// Try and connect using the info above.
			$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
			if ( mysqli_connect_errno() )
			{
				// If there is an error with the connection, stop the script and display the error.
				die ('Failed to connect to MySQL: ' . mysqli_connect_error());
			}
			
			$sql = "SELECT *  FROM volunteerprojects";
			
			$result = $con->query($sql);
			
			if ($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					echo "Volunteer Project Name: " . $row["VolunteerProjectName"] . "<br> Description: " . $row["VolunteerProjectDescription"] . "<br> Application Close Date: " . $row["ApplicationCloseDate"] . "<br> Start Date: " . $row["StartDate"]. "<br><br><br>";
				}
			}
			else
			{
				echo "no results";
			}
		?>
	</body>
</html>