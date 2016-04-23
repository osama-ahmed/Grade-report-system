<?php


require_once 'Classes/Teacher.php';
require_once 'Classes/Student.php';
require_once 'Classes/Exam.php';
require_once 'Classes/Grade.php';
require_once 'Classes/databaseOperations.php';

$exam_id=$_SESSION['exam_id'];
$students=array();
$course_code=$_SESSION['course_code'];

Teacher::getCourseStudents($students,$course_code,$exam_id);
$x=sizeof($students);
$i=0;
$j=0;

echo"<p>students grades in this exam</p>";

echo "<form action=createGradesInterface.php?data=".$exam_id." method=POST>";

echo"<table cellspacing=5 cellpadding=5 border=1><tr bgcolor=gray><td>Student name</td>
<td>Grade</td></tr>";

while($i<$x)
{
	echo"<tr><td>".$students[$i]->Fname." ".$students[$i]->Lname."</td>
	<td><input type=text name=".$students[$i]->Fname." value=".$students[$i]->grades[0]->grade
	."></td>
	</tr>";
	
	if(!empty($_POST[$students[$i]->Fname]))
	{
		$students[$i]->grades[0]->grade=$_POST[$students[$i]->Fname];
		$students[$i]->grades[0]->exam_ID=$exam_id;
	}
	
	else if(empty($_POST[$students[$i]->Fname]))
	{
		$students[$i]->grades[0]->grade=0;
		$students[$i]->grades[0]->exam_ID=$exam_id;
	}
	
	$i++;
}

echo "<tr><td><input type=submit value=Save></tr></td>";
echo "</table></form>";

if($x==0)
$students[0]=new Student;

if(isset($_POST[$students[0]->Fname]))
{
$y=Teacher::createGrades($students);

if($y)
{
	echo"<font color=green>grades saved successfuly</font>";
	echo '<meta http-equiv="refresh" content="0" />';
}
//else
//echo"<font color=red>Failed to save data</font>";
}



?>