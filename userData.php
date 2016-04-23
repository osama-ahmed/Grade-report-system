<?php

require_once 'Classes/User.php';

$user=new User;
User::getUserData($user);

echo "<table cellspacing=5 cellpadding=5 border=0>";
echo "<tr><td>Fname: ".$user->Fname."</td><td>Lname: ".$user->Lname."</td></tr>";
echo "<tr><td>Email: ".$user->email."</td></tr>";
echo "<tr><td>ID: ".$user->ID."</td></tr>";
echo "<tr><td>Password: ".$user->password."</td></tr>";
echo "<tr><td>Gender: ".$user->gender."</td></tr>";
echo "<tr><td>Telephone: ".$user->telephone."</td></tr>";
echo "<tr><td>Address: ".$user->address."</td></tr>";
echo "<tr><td>User type: ".$user->type."</td></tr>";

?>