<?php


require_once 'Classes/Student.php';
require_once 'Classes/Course.php';

$id=$_SESSION['ID'];
$courses=array();
$students=array();

Student::getStudentCourses($courses,$id);
$x=sizeof($courses);
$i=0;

echo"<p>Courses that you are registed in</p>";

echo"<table cellspacing=5 cellpadding=5 border=1><tr bgcolor=gray><td>Course code</td>
<td>Course name</td></tr>";

while($i<$x)
{
	echo"<tr><td><a href=studentCourseExamsInterface.php?data=".$courses[$i]->code.">"
	.$courses[$i]->code.
	"</a></td>
	<td>".$courses[$i]->name."</td></tr>";
	$i++;
}


echo "</table>";

?>