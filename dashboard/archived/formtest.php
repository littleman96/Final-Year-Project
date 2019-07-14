<?php 
require "insert_dropdown.php";
?>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td><form name="form1" method="post" action="insert_ac.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td colspan="3"><strong>Sign up to the Tea App</strong></td>
</tr>

<tr>
<td width="71">Name</td>
<td width="6">:</td>
<td width="301"><input name="name" type="text" id="name"></td>
</tr>


<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Submit"></td>
</tr>

</table>
</form>
</td>
</tr>
</table>

<?php
$dropdown = "<select name='drinkname'>";
while($row = mysql_fetch_assoc($dresult)) {
  $dropdown .= "\r\n<option value='{$row['VolunteerProjectSkillsID']}'>{$row['VolunteerProjectSkill']}</option>";
}
$dropdown .= "\r\n</select>";
echo $dropdown;
?>