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
	
	//$sqlmatchedprojects = "SELECT * FROM volunteerprojects RIGHT JOIN matchedprojects on volunteerprojects.VolunteerProjectID = matchedprojects.MatchedProjectProjectID";//so these are the projects you don't want to be matched with
	
	//$sqlmatchedprojects = "SELECT * FROM matchedprojects";
	
	//$sqlallprojects = "SELECT * FROM volunteerprojects INNER JOIN charity_name ON volunteerprojects.VolunteerProjectCharityID=charity_name.CharityID INNERJOIN volunteerprojectaddress ON volunteerprojects.VolunteerProjectAddressID=volunteerprojectaddress.VolunteerProjectAddressID INNERJOIN volunteerprojectdaytimes ON volunteerprojects.VolunteerProjectDayTimeID=volunteerprojectdaytimes.VolunteerProjectDayTimeID INNERJOIN volunteerprojectskills ON volunteerprojects.VolunteerProjectSkillNeeded1=volunteerprojectskills.VolunteerProjectSkillsID AND volunteerprojects.VolunteerProjectSkillNeeded2=volunteerprojectskills.VolunteerProjectSkillsID AND volunteerprojects.VolunteerProjectSkillNeeded3=volunteerprojectskills.VolunteerProjectID AND volunteerprojects.VolunteerProjectSkillDevelop1=volunteerprojectskills.VolunteerProjectSkillsID AND volunteerprojects.VolunteerProjectSkillDevelop2=volunteerprojectskills.VolunteerProjectSkillsID AND volunteerprojects.VolunteerProjectSkillDevelop3=volunteerprojectskills.VolunteerProjectSkillsID";
	
	$sqlallprojects = "SELECT * FROM volunteerprojects";
	
	//$query1 = mysqli_query($con, $sqlmatchedprojects);
	$query2 = mysqli_query($con, $sqlallprojects);
	
	
	//echo $_POST['RequiredSkill1'];
	//echo $_POST['RequiredSkill2'];

	
	//if($query1>$query2) //there are more projects than have been taken
	//{
		
		$MatchScore = 0;
		
		if($_POST['RequiredSkill1'] == 'volunteerprojects.VolunteerProjectSkillNeeded1' or $_POST['RequiredSkill1'] == 'volunteerprojects.VolunteerProjectSkillNeeded2' or $_POST['RequiredSkill1'] == 'volunteerprojects.VolunteerProjectSkillNeeded3')
		{
			$MatchScore = $MatchScore + 6;
		}
		if($_POST['RequiredSkill2'] == 'volunteerprojects.VolunteerProjectSkillNeeded2')
		{
			$MatchScore = $MatchScore + 6;
		}
		if($_POST['RequiredSkill3'] == 'volunteerprojects.VolunteerProjectSkillNeeded3')
		{
			$MatchScore = $MatchScore + 6;
		}
		if($_POST['SkillGain1'] == 'volunteerprojects.VolunteerProjectSkillDevelop1')
		{
			$MatchScore = $MatchScore + 3;
		}
		if($_POST['SkillGain2'] == 'volunteerprojects.VolunteerProjectSkillDevelop2')
		{
			$MatchScore = $MatchScore + 3;
		}
		if($_POST['SkillGain3'] == 'volunteerprojects.VolunteerProjectSkillDevelop3')
		{
			$MatchScore = $MatchScore + 3;
		}
		
		
		if($MatchScore>0)
		{
			echo "well done";
		}
		else
		{
			echo"No volunteering projects matched your criteria";
		}
	//}
	//else //if no projects are available
	//{
		//echo"No volunteering projects are available.";
	//}
?>