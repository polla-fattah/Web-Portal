<?php
include("include_files/checksession.php");
include("include_files/connect.php");
				
				
?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Control Panel - Main Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
	color: #000099;
}
.style2 {
	color: #CC0099;
	font-weight: bold;
	font-size: 20px;
}
.style25 {color: #0000FF; font-weight: bold; font-size: 14px; }
.style26 {
	color: #0000FF;
	font-weight: bold;
}
.unnamed1 {
	border-top-width: medium;
	border-right-width: medium;
	border-bottom-width: medium;
	border-left-width: medium;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: dashed;
	border-left-style: none;
	border-top-color: #CC3300;
	border-right-color: #CC3300;
	border-bottom-color: #CC3300;
	border-left-color: #CC3300;
}
.links
{
text-decoration:none;
}
.noneB {
	border: none;
}
-->
</style>
</head>

<body bgcolor="#999999">
<table width="50%" border="0" align="center">
  <tr>
    <td bgcolor="#CCCCCC" height="60"><div align="center" class="style1" >Control Panel </div></td>
  </tr>
</table>
<table width="50%" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="noneB">
  <tr><td height="" colspan="4" valign="top" align="right">Welcome, <b> <?php echo $_SESSION['username']; ?> </b> &nbsp;&nbsp;&nbsp; <a href="logout.php" style="text-decoration:none"><b>Logout</b></a></td></tr>
  <tr> <td colspan=4><hr /></td></tr>
  
	<tr>
    <td colspan="4" class="noneB">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" class="unnamed1"><span class="style2">Movies</span></td>
  </tr>
  <tr class="unnamed1">
    <td width="8%">&nbsp;</td>
    <td width="36%"><span class="style25"><a href="addmovies.php" class="links" >Add Movies</a> </span></td>
    <td width="29%"><span class="style25"><a href="editmovies.php" class="links">Edit/Remove Movies</a> </span></td>
    <td width="29%"><span class="style25"><a href="editmovies.php" class="links">  </span></td>

	</tr>
	<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="unnamed1" colspan="4"><span class="style2">Music</span></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style25"><a href="addmusic.php" class="links" >Add Music</a></span></td>
    <td><span class="style25"><a href="editmusic.php" class="links">Edit/Remove Music</a></span></td>
    <td><span class="style25"></a></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" class="unnamed1"><span class="style2">Programs</span></td>

  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style25"><a href="addPrograms.php" class="links" >Add Programs </a></span></td>
    <td><span class="style25"><a href="editPrograms.php" class="links" >Edit/Remove Programs</a> </span></td>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" class="unnamed1"><span class="style2">Ebooks</span></td>
     
  </tr>
  <tr>
	  <td>&nbsp;</td>
    <td><span class="style25"><a href="addebooks.php" class="links" >Add Ebooks</a> </span></td>
    <td><span class="style25"><a href="EditEbooks.php" class="links" >Edit/Remove Ebooks</a> </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php 
	if($_SESSION['role']=="admin")
	{
	echo '<tr>';
  echo '  <td colspan="4" class="unnamed1"><span class="style2">Users</span></td>';
   
  echo '</tr>';
  echo '<tr>';
	 echo ' <td>&nbsp;</td>';
   echo ' <td><span class="style25"><a href="addusers.php" class="links" >Add Users</a> </span></td>';
   echo ' <td><span class="style25"><a href="editusers.php" class="links" >Edit/Remove Users</a> </span></td>';
    
   echo ' <td>&nbsp;</td>';
  echo '</tr>';
  echo '<tr>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>';
  echo '<tr>';
    echo '<td colspan="4" class="unnamed1"><span class="style2">Categories (Menus)</span></td>';
    
 echo ' </tr>';
	 echo '<tr>';
	  echo '<td> &nbsp;</td>';
   echo ' <td ><span class="style25"><a href="addCategory.php" class="links" >Add Categories</a> </span></td>';
   echo ' <td><span class="style25"><a href="EditCategories.php" class="links" >Remove Categories</a> </span></td>';
   
   echo ' <td>&nbsp;</td>';
  echo '</tr>';
	 echo '<tr>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>';
	 }
	?>
</table>
</body>
</html>
