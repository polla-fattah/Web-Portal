<?php
session_start();
$loggedin =false;
if(isset($_SESSION['username']))
	$loggedin=true;
if($loggedin==true)
	header("location:main.php");
include "include_files/connect.php";
$ok =true;
if(isset($_POST['submit'])) 
{
$login = mysql_query("select * from users where (Name = '" . $_POST['name'] . "') and (Password = '" . $_POST['pass'] . "')",$db) or die(mysql_error());
$rowcount = mysql_num_rows($login);
if ($rowcount == 1)
{
  $row= mysql_fetch_array($login);
  $_SESSION['username'] = $_POST['name'];
	$_SESSION['role'] = $row['Role'];
	header("location:main.php");
//	if($row['Role']=="user")
	//	header("location:user_main.php");

}
else
{
$ok=false;
}
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Portal Control Panel - Login </title>


</head>
<body bgcolor="#666666" >

<table summary="Main table " align="center" width="40%">


<tr><td height="60"></td></tr>

<tr>
<table cellpadding=0 cellspacing=1 align="center" border=0 width=28% bgcolor=grey>

<tr><td bgcolor=#424142 style="padding-left:10px;padding-top:20px;padding-bottom:20px; ">
<table cellpadding=0 cellspacing=0 border=0 width=100%>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="post" >

<tr><td class=HD height=25 valign=top><img src=web_files/icon_arrow.gif><font color="#EEEEEE">LOGIN TO 
	PORTAL CONTROL PANEL</td></tr>

<tr>
<td height=30  align=left><b><font color="#EEEEEE"> Name:</font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type=text size=30 name = "name"></td>
</tr>

<tr>
<td height=30  align=left><b><font color="#EEEEEE"> Password:</font></b>&nbsp;&nbsp;&nbsp;&nbsp;  <input type=password size=30 name = "pass"></td>
</tr>

<tr><td class=HD height=25 valign=bottom align=right style="padding-right:62px;"><INPUT type=submit value=Login name = submit></td></tr>
</form>
<tr><td><?php if ($ok==false) echo "<font color=red>Wrong User name or passowrd!</font>"; ?></td></tr>
<tr><td><?php // if ($loggedin==true) { die ("<script>window.location = 'main.php';</script>");} ?></td></tr>
</table>
</td>

</tr>




</table> <!-- Manin taable -->

</body>
</html>
