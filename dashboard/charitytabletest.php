<html>
	<head>
		<title>charity test</title>
	</head>

	<body>
	
	<form action="charitytabletest.php" method="post">
		<p>CharityID:</p><input type="text" name="CharityID" required = "required"></input></p>
		<p>CharityName:</p><input type="text" name="CharityName" required = "required"></input></p>
		<p><input type="submit" value="Insert Details" required = "required"></input></p>
	
	<?php 
	
		include 'connecttodatabase.php';
		
		if ($_POST)
		{
			$CharityID = $_POST['CharityID'];
			$CharityName = $_POST['CharityName'];
		
			$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
			
			$sql = "INSERT INTO charity_name (CharityID, CharityName) VALUES ('$CharityID', '$CharityName')";
			
			if ($conn->query($sql) === TRUE)
			{
				echo "New record created successfully";
			}
			else
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		}	
	?>
	
	</body>

</html>