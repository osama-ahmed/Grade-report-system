<?php


require_once 'Classes/Student.php';
require_once 'Classes/Course.php';
require_once 'Classes/Exam.php';

$course_code=$_GET['data'];
$_SESSION['course_code']=$course_code;
$exams=array();
$student_id=$_SESSION['ID'];

Student::getStudentCourseExams($exams,$course_code,$student_id);
$x=sizeof($exams);
$i=0;
$totalGrade=0;

echo"<table cellspacing=5 cellpadding=5 border=1><tr bgcolor=gray><td>exam ID</td>
<td>exam name</td><td>Grade</td></tr>";

while($i<$x)
{
	echo"<tr><td>".$exams[$i]->ID."</td>
	<td>".$exams[$i]->name."</td><td>".$exams[$i]->grade."</td></tr>";
	$totalGrade+=$exams[$i]->grade;
	$i++;
}

echo "<tr><td></td><td bgcolor=green>Total Grade</td><td bgcolor=green>".$totalGrade."
</td></tr>";
echo "</table>";


?>