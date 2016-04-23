<?php

require_once 'Classes/Admin.php';
require_once 'Classes/Course.php';
	
	$course=array();
	$deleted=array();
	$i=0;
	$j=0;
	
	Course::getCourses($course);
	$x=sizeof($course);
	echo "<form action=manageCoursesInterface.php method=POST>";
	echo "<table cellspacing=5 cellpadding=5 border=1>";
	echo "<tr bgcolor=gray><td></td><td>Course code</td><td>Course name</td>
	<td>Course description</td><td>Course instructor ID</td>";
	
	$y=0;
	
	while($i<$x)
	{
		echo "<tr><td><input type=checkbox name=".$course[$i]->code."></td>";
		echo "<td>".$course[$i]->code."</td>";
		echo "<td>".$course[$i]->name."</td>";
		echo "<td>".$course[$i]->description."</td>";
		echo "<td>".$course[$i]->teacher_ID."</td></tr>";
		echo "</tr>";
		
		if(isset($_POST[$course[$i]->code]))
		{
			$deleted[$j]=$course[$i]->code;
			$j++;
		}
        
        
        $i++;
	}
	
	$admin=new Admin;
	$y=$admin->deleteCourse($deleted);
	
	 if($y)
        {
			echo "<font color=red>Course deleted</font><br>";
			$y=0;
			unset($_POST['$course[$i]->code']);
			header('Location: manageCoursesInterface.php');
		}
	
	if($x)
    echo "<tr><td><input type=submit value=Delete></td></tr></table></form><br>";
	echo "<table cellspacing=5 cellpadding=5><tr><td><form action=addCourseInterface.php method=POST>
	<input type=submit value='Add new course'></form>
	</td></tr></table>";

?>