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
	
	$sqlmatchedprojects = "SELECT * FROM volunteerprojects RIGHT JOIN matchedprojects on volunteerprojects.VolunteerProjectID = matchedprojects.MatchedProjectProjectID";//so these are the projects you don't want to be matched with
	
	$sqlallprojects = "SELECT * FROM volunteerprojects INNER JOIN charity_name ON volunteerprojects.VolunteerProjectCharityID=charity_name.CharityID INNERJOIN volunteerprojectaddress ON volunteerprojects.VolunteerProjectAddressID=volunteerprojectaddress.VolunteerProjectAddressID INNERJOIN volunteerprojectdaytimes ON volunteerprojects.VolunteerProjectDayTimeID=volunteerprojectdaytimes.VolunteerProjectDayTimeID INNERJOIN volunteerprojectskills ON volunteerprojects.VolunteerProjectSkillNeeded1=volunteerprojectskills.VolunteerProjectSkillsID AND volunteerprojects.VolunteerProjectSkillNeeded2=volunteerprojectskills.VolunteerProjectSkillsID AND volunteerprojects.VolunteerProjectSkillNeeded3=volunteerprojectskills.VolunteerProjectID AND volunteerprojects.VolunteerProjectSkillDevelop1=volunteerprojectskills.VolunteerProjectSkillsID AND volunteerprojects.VolunteerProjectSkillDevelop2=volunteerprojectskills.VolunteerProjectSkillsID AND volunteerprojects.VolunteerProjectSkillDevelop3=volunteerprojectskills.VolunteerProjectSkillsID";
	
	
	$query1 = mysqli_query($con, $sqlmatchedprojects);
	$query2 = mysqli_query($con, $sqlallprojects);
	
	if($query2>$query1) //there are more projects than have been taken
	{
		
		if($_POST['MonAM'] == 'volunteerprojectdaytimes.MonAM') //not sure if the date thing is right
		{
			if() //checks within range. this will be worked out beforehand
			{
				if()//if projects match citerea it will be shown below
				{
					//shows matches.
				}
				else
				{
					echo "No available projects match your criterea.";
				}
			}
			else
			{
				
			}
		}
		else
		{
			//non available on these dates
		}
	}
	else //if no projects are available
	{
		echo"No volunteering projects are available.";
	}
?>