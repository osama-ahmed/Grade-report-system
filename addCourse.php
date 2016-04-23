

<form action="addCourseInterface.php" method="post">
<table cellspacing="5" cellpadding="5" border="0">
	<tr>
		<td>Course name:</td>
		<td><input type="text" name="name"/></td>
	</tr>
	<tr>
		<td>Course code:</td>
		<td><input type="text" name="code"></td>
	</tr>
	<tr>
		<td>Course description:</td>
		<td><textarea cols="50" rows="10" name="description"></textarea></td>
	</tr>
	<tr>
		<td>Course teacher:</td>
		<td><select name="teacher">
		<option value=""></option>
		
<?php
			require_once 'Classes/Teacher.php';
			require_once 'Classes/Student.php';
			require_once 'Classes/Admin.php';
            require_once 'Classes/Course.php';
			
			$teachers=array();
			$i=0;
		    Teacher::getTeachers($teachers);
			$x=sizeof($teachers);
			
			while($i<$x)
			{
				echo "<option value=".$teachers[$i]->ID.">".$teachers[$i]->email."</option>";
				
				$i++;
			}
			
			
?>
		</select></td>
	</tr>
	<tr>
		<td>Course students:</td>
		<td>
		
<?php
			$students=array();
			$i=0;
			$j=0;
			$S=array();
		    Student::getStudents($students);
			$x=sizeof($students);
			
			while($i<$x)
			{
				echo "<input type=checkbox name=".$students[$i]->ID.">".$students[$i]->email;
				echo "<br>";
				
				if(isset($_POST[$students[$i]->ID]))
		        {
			       $S[$j]=$students[$i]->ID;
			       $j++;
			       
		        }
				
				$i++;
			}
			
			
			
		echo"</td>
	</tr>
	<tr>
		<td></td>
		<td><input type=submit value=Add></td>
	</tr>
</table>
</form>";


if(isset($_POST['name']))
{
$course=new Course;
$course->code=$_POST['code'];
$course->name=$_POST['name'];
$course->teacher_ID=$_POST['teacher'];
$course->description=$_POST['description'];

$x=Admin::addCourse($course,$S);
if($x)
echo"<font color=green>Course data saved successfuly</font>";
else
echo"<font color=red>Failed to save data</font>";
}

?>