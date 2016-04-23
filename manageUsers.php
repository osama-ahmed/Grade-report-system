<?php

require_once 'Classes/Admin.php';
	
	$user=array();
	$deleted=array();
	$i=0;
	$j=0;
	
	User::getUsers($user);
	$x=sizeof($user);
	echo "<form action=manageUsersInterface.php method=POST>";
	echo "<table cellspacing=5 cellpadding=5 border=1>";
	echo"<tr bgcolor=gray><td></td><td>ID</td><td>First name</td><td>Last name</td>
	<td>Email</td><td>Address</td><td>Telephone</td><td>Gender</td><td>User type</td></tr>";
	
	$y=0;
	
	while($i<$x)
	{
		echo "<tr><td><input type=checkbox name=".$user[$i]->ID."></td>";
		echo "<td>".$user[$i]->ID."</td>";
		echo "<td>".$user[$i]->Fname."</td>";
		echo "<td>".$user[$i]->Lname."</td>";
		echo "<td>".$user[$i]->email."</td>";
		echo "<td>".$user[$i]->address."</td>";
		echo "<td>".$user[$i]->telephone."</td>";
		echo "<td>".$user[$i]->gender."</td>";
		echo "<td>".$user[$i]->type."</td>";
		echo "</tr>";
		
		if(isset($_POST[$user[$i]->ID]))
		{
			$deleted[$j]=$user[$i]->ID;
			$j++;
		}
        
        
        $i++;
	}
	
	$admin=new Admin;
	$y=$admin->deleteUser($deleted);
	
	 if($y)
        {
			$y=0;
			unset($_POST['$user[$i]->ID']);
			echo '<meta http-equiv="refresh" content="0" />';
		}
	
	if($x)
	{
		echo "<tr><td><input type=submit value=Delete></td></tr></table></form><br>";
	}
    
    
	echo "<table cellspacing=5 cellpadding=5><tr><td>
	<form action=addUserInterface.php method=POST>
	<input type=submit value='Add new user'></form>
	</td></tr></table>";

	//echo "<a href=addUserInterface.php>Add new user</a>";

?>