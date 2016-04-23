

<form action="logInInterface.php" method="post">
<table cellspacing="5" cellpadding="5" border="0">
	<tr>
		<td>email:</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>password:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="log in"></td>
	</tr>
</table>
</form>

 
<?php

require_once 'Classes/User.php';
$user=new User;

if(isset($_POST['email']))
{
$x=$user->logIn($_POST['email'],$_POST['password']);

if($x){
$_SESSION['email']=$_POST['email'];
$_SESSION['pass']=$_POST['password'];


if($_SESSION['type']=="admin")
header('Location: home_admin.php');

else if($_SESSION['type']=="teacher")
header('Location: teacherCoursesInterface.php');

else if($_SESSION['type']=="student")
header('Location: studentCoursesInterface.php');
}

else
echo"<font color=red>Invalid username or password</font>";
}


?>