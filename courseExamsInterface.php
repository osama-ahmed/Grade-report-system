<?php

session_start();

if(!isset($_SESSION['pass']))
header('Location: logInInterface.php');
?>

<html dir="ltr">
<head>
<title>
</title>

<style type="text/css">
a{color:blue;}
a:visited{color:blue;}
a:hover{color:blue;}
a{text-decoration:none;}
body{border:solid white;}
.td{border:solid black;}
hr{border:solid}
table{padding:5 5 5 5;}
.my-style-text{color:#8B0000;}
.my-style-font1{font-size:46;}
.my-style-font2{font-size:24;}
.my-style-font3{font-size:20;}
body{list-style-type:circle;}
</style>

</head>


<body bgcolor="#ffffff">
<center>

<table bgcolor="#F8F8F8" width="99%" align="center">
<tbody>
<td>
<font class="my-style-font1" color="black"><b><i>Grade Report</i></b></font>
</td>
</tbody>
</table>


<table bgcolor="gray" width="99%" align="center" class="my-style-font2" valign="center" height="80" 
border="0" cellpadding="5" cellspacing="5">
<tr>
<td width="25%"></td>
	<td align="center" width="10%"><a href="teacherCoursesInterface.php">Home</a></td>
	<td align="center" width="10%"><a href="myAccount_teacher.php">Profile</a></td>
	<td align="center" width="10%"><a href="help.php">Help</a></td>
	<td align="center" width="10%"><a href="about_teacher.php">About</a></td>
	<td align="center" width="10%"><a href="logout.php">Logout</a></td>
<td width="25%"></td>    
</tr>
</table>

<table bgcolor="#F8F8F8" width=99% class="my-style-font3" align="center" height="500">


<td bgcolor="#F8F8F8" width=80% valign="top">

<?php


echo"<table align=left><tr><td>";
require 'courseExams.php';
echo"</td></tr></table>";

?>


</td>

</table>



<table bgcolor="#F8F8F8" width="99%" style="font-size:18" align="center" height="60">
<tbody>
<tr>
<td align="center">
<font color=#880000>copyright &copy;2015 All rights reserved</font>
</td>
</tr>
</tbody>
</table>
<a name="down"></a>
</center>
</body>
</html>