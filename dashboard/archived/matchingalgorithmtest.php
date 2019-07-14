<?php
	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = '';
	$DATABASE_NAME = 'charity';
	
	
	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
	
	$sql = "SELECT VolunteerProjectSkillsID, VolunteerProjectSkill FROM volunteerprojectskills";
	
	
    $query = mysqli_query($con, $sql);
	
    while ( $results[] = mysqli_fetch_object ( $query ) );
    array_pop ( $results );
	
?>
	
<?php
	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = '';
	$DATABASE_NAME = 'charity';
	
	
	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
	$sql = "SELECT * FROM volunteerprojects";
	//$sql = "SELECT * FROM volunteerprojects";

	//$sql2 = "SELECT * FROM volunteerprojectskills";
	$query = mysqli_query($con, $sql);
	//$query2 = mysqli_query($con, $sql2);
	
	$matchscore=0;
	
	IF($_POST["RequiredSkill"] == "VolunteerProjectSkillNeeded2")
	{
		$matchscore =6;
	}
	
	echo $matchscore;
?>

<html>

<body>
	<form action="matchingalgorithmtest.php" method ="POST">
		<select name = "RequiredSkill">
			<option value="null">select</option>
			<?php foreach ( $results as $option ) : ?>
			<option value="<?php echo $option->VolunteerProjectSkillsID; ?>"><?php echo $option->VolunteerProjectSkill; ?></option>
			<?php endforeach; ?>
		</select>
		<br>
		<br>
		<input type ="submit" value= "enter">
	</form>


</body>
</html>