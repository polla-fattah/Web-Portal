<?php
include "include_files/checksession.php";
include "include_files/connect.php";
  
 	
  	if($_SESSION['role']!="admin")
		{
		
  	 die ("<script>window.location = 'login.php';</script>");
		
	  }
$added=false;
if(isset($_POST['submit'])) 
{ 
  include "include_files/connect.php";
	
  $db = mysql_connect($server,$username,$password) or DIE("Connection to database failed, perhaps the service is down !!");
  mysql_select_db($db_name) or DIE("Database name not available !!");
  
	$cat=str_replace(" ", "_",$_POST['uname']);
	
	
  if (!mysql_query("INSERT INTO Portal.". $_POST['submenu']." (category) VALUES ('$cat')",$db))
  {
    die('Error: ' . mysql_error());
  }
	else $added=true;

  mysql_close($db);
  
}




?>




<html>
<head>


<script type="text/javascript">
function validate_form(thisform)
{
var err="";
var ok=true;
with (thisform)
  {
	
  	if(uname.value==null || uname.value==""){
		 	err="Please enter Menu name\n"; ok =false;}
			
		var combo1 = document.getElementById("submenu");
			var choice = combo1.options[combo1.selectedIndex].text;
			
		if( choice=="... Select Menu ..."){
			err+="Select a Menu to add to \n";ok =false;}							
		
  }
	if(ok==false)
			alert("Error :\n"+err);
	return ok;
}
</script>
<style type="text/css">


<title>Control Panel - Add ebooks</title>
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
  <tr>
    <td height="30" colspan="3"><a href="main.php" class=lang style="text-decoration:none"><b>Back</b></a></td>
		<td align="right" style="padding-right: 20px">Welcome,  <b><?php echo $_SESSION["username"]; ?></b></td>
  </tr>
	<tr> <td colspan=4><hr /></td></tr>
  <?php 
	
	if($added==true)  
		 					echo"<tr> <td colspan=4 ><font color=#008000>Category Added Successfuly.</font></td></tr>";
	?>
  <tr>
    <td colspan="4" class="unnamed1"><span class="style2">Add Category</span></td>
  </tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
<form onsubmit="return validate_form(this)" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="post">
  <tr class="unnamed1">
  <td width="35%"> Main Menu (required) : </td>

	<td colspan="1" ><select name="submenu"  id="submenu" >
<option value="#">... Select Menu ...</option>	
<?php 
include "include_files/connect.php";
	$result = mysql_query("select * from main_menu",$db);
	
	while($row = mysql_fetch_array($result))
  {
   echo "<option>".$row['SubCategoryTable']."</option>";
	}
?>	
</select></td>
</tr>
	
	<tr class="unnamed1">
    <td> Category Name (required) : </td>
    <td colspan="3"><input name="uname"  type="text"/></td>
  </tr>

    <tr>
    <td>&nbsp;</td>
    <td width="12%"><input name="submit" type="submit" value="Add"></td>
    <td width="24%"><input name="cancel"   type="reset" value="Reset" ></td>
</form>
    <td width="34%">&nbsp;</td>
  </tr>
</table>
</body>
</html>
