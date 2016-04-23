

<form action="addUserInterface.php" method="post">
<table cellspacing="5" cellpadding="5" border="0">
	<tr>
		<td>User Type:</td>
		<td><select name="type">
	<option value=""></option>
	<option value="teacher">Teacher</option>
	<option value="student">Student</option>
</select></td>
	</tr>
	<tr>
		<td>First name:</td>
		<td><input type="text" name="fname"></td>
	</tr>
	<tr>
		<td>Last name:</td>
		<td><input type="text" name="lname"></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Gender:</td>
		<td><select name="gender">
	<option value=""></option>
	<option value="male">Male</option>
	<option value="female">Female</option>
</select></td>
	</tr>
	<tr>
		<td>Address:</td>
		<td><input type="text" name="address"></td>
	</tr>
	<tr>
		<td>Telephone:</td>
		<td><input type="text" name="telephone"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Add"></td>
	</tr>
</table>
</form>

 
<?php

require_once 'Classes/Admin.php';


if(isset($_POST['email']))
{
$user=new User;
$user->Fname=$_POST['fname'];
$user->Lname=$_POST['lname'];
$user->address=$_POST['address'];
$user->telephone=$_POST['telephone'];
$user->password=$_POST['password'];
$user->email=$_POST['email'];
$user->type=$_POST['type'];
$user->gender=$_POST['gender'];
	
$x=Admin::addUser($user);
if($x)
echo"<font color=green>User data saved successfuly</font>";
else
echo"<font color=red>Failed to save data</font>";
}


?>