<?php

session_start();
session_destroy();

if(!isset($_SESSION['pass']))
header('Location: logInInterface.php');
?>


<html dir="ltr">
<head>
<title>
Add user
</title>

<style type="text/css">
a{color:blue;}
a:visited{color:blue;}
a:hover{color:blue;}

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
<a name="up"></a>

<table bgcolor="#F8F8F8" width="99%" align="center">
<tbody>
<td>
<font class="my-style-font1" color="black"><b><i>Grade Report</i></b></font>
</td>
</tbody>
</table>


<table bgcolor="gray" width="99%" align="center" class="my-style-font2" valign="center" height="80">
<tbody>
<td align="center">
&nbsp; Home &nbsp;&nbsp;
<b>|</b>
&nbsp;&nbsp;
Help
&nbsp;&nbsp;
<b>|</b>
&nbsp;&nbsp;
About
</td>
</tbody>
</table>

<table bgcolor="#F8F8F8" width=99% class="my-style-font3" align="center" height="500">


<td bgcolor="#F8F8F8" width=80% valign="top">

<?php

header('Location: logInInterface.php');

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