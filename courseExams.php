<?php


require_once 'Classes/Teacher.php';
require_once 'Classes/Course.php';
require_once 'Classes/Exam.php';

$course_code=$_GET['data'];
$_SESSION['course_code']=$course_code;
$exams=array();

Teacher::getCourseExams($exams,$course_code);
$x=sizeof($exams);
$i=0;

echo"<p>exams in this course</p>";

echo"<table cellspacing=5 cellpadding=5 border=1><tr bgcolor=gray><td>exam ID</td>
<td>exam name</td></tr>";

while($i<$x)
{
	echo"<tr><td><a href=createGradesInterface.php?data=".$exams[$i]->ID.">".$exams[$i]->ID.
	"</a></td>
	<td>".$exams[$i]->name."</td></tr>";
	$i++;
}


echo "</table>";

echo "<table cellspacing=5 cellpadding=5><tr><td>
	<form action=addExamInterface.php?data=".$course_code." method=POST>
	<input type=submit value='Add new exam'></form>
	</td></tr></table>";

?>