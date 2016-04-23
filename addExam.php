

<form action="addExamInterface.php" method="post">
<table cellspacing="5" cellpadding="5" border="0">
	<tr>
		<td>Exam name:</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Add"></td>
	</tr>
</table>
</form>

 
<?php

require_once 'Classes/Exam.php';
require_once 'Classes/Teacher.php';

if(isset($_POST['name']))
{
$exam=new Exam;
$exam->name=$_POST['name'];
$course_code=$_SESSION['course_code'];
	
$x=Teacher::addExam($exam,$course_code);
if($x)
echo"<font color=green>Exam saved successfuly</font>";
else
echo"<font color=red>Failed to save data</font>";
}


?>