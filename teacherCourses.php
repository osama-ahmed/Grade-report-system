<?php


require_once 'Classes/Teacher.php';
require_once 'Classes/Course.php';

$id=$_SESSION['ID'];
$courses=array();
$students=array();

Teacher::getTeacherCourses($courses,$id);
$x=sizeof($courses);
$i=0;

echo"<p>Courses that you are teach</p>";

echo"<table cellspacing=5 cellpadding=5 border=1><tr bgcolor=gray><td>Course code</td>
<td>Course name</td><td>Number of registed students</td></tr>";

while($i<$x)
{
	$y=Teacher::getCourseStudentsNumber($students,$courses[$i]->code);
	
	echo"<tr><td><a href=courseExamsInterface.php?data=".$courses[$i]->code.">"
	.$courses[$i]->code.
	"</a></td>
	<td>".$courses[$i]->name."</td><td>".$y."</td></tr>";
	$i++;
}


echo "</table>";

?>