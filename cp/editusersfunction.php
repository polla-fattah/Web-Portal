<?php
include "include_files/checksession.php";
include "include_files/connect.php";


$added=false;
$pass="";
if(isset($_POST['submit'])) 
{ 

    include "include_files/connect.php";
    $db = mysql_connect($server,$username,$password) or DIE("Connection to database failed, perhaps the service is down !!");
    mysql_select_db($db_name) or DIE("Database name not available !!");
    
		if(trim($_POST['password'])=="")
		  $pass=$_POST['oldpassword'];
		else 
		  $pass=$_POST['password'];	
		if (!mysql_query("Update users SET  Password='$pass', Role='$_POST[role]'	Where Name='".$_POST['uname']."'",$db))
    {
      die('Error: ' . mysql_error());
    }
  	else $added=true;
    mysql_close($db);
}

?>

<html>
<head>

<title>Control Panel - Edit User</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script type="text/javascript">
function validate_form(thisform)
{
var err="";
var ok=true;
with (thisform)
  {
	
  	if(uname.value==null || uname.value==""){
		 	err="Please enter the user name\n"; ok =false;}
		if(password.value!=confirmpass.value){
			err+="Password Mismatch.\n";ok =false;}
			
			
  }
	if(ok==false)
			alert("Error :\n"+err);
	return ok;
}
</script>


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
    <td height="" colspan="3"><a href="editusers.php" class=lang style="text-decoration:none"><b>Back</b></a></td>
		<td align="right" style="padding-right:20px; padding-bottom:0px">Welcome,  <b><?php echo $_SESSION["username"]; ?></b></td>
  </tr>
	<tr> <td colspan=4 style="padding-top:0px; padding-bottom:15px; padding-top:0px"><hr /></td></tr>
  <?php 
	
	if($added==true)  
		 					echo"<tr> <td colspan=4 ><font color=#008000>User Updated Successfuly.</font></td></tr>";
	?>
  <tr>
    <td colspan="4" class="unnamed1"><span class="style2">Edit User</span></td>
  </tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<?php


include "include_files/connect.php";
include "include_files/paths.php";
				if(!isset($_POST['submit']))
						$q="SELECT *  FROM users WHERE Name ='". $_GET['q']."'";			
				else
						$q="SELECT *  FROM users WHERE Name ='". $_POST['uname']."'";						
				$rs=mysql_query($q,$db) or die(mysql_error());			

$r = mysql_fetch_array($rs);
?>
 <form onsubmit="return validate_form(this)" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="post">
  <tr class="unnamed1">
    <td> Name (required) : </td>
    <td colspan="3"><b><?php echo $r['Name']; ?></b><input name="uname"  type="hidden" value="<? echo $r['Name'];?>" /></td>
  </tr>

  <tr class="unnamed1">
    <td width="30%"> Password :</td>
    <td colspan="3"><input name="password"  type="password"/></td> <input type="hidden" name="oldpassword" value="<?php echo $r['Password']; ?>" />
  </tr>
  <tr class="unnamed1">
    <td width="30%">Confirm Password :</td>
    <td colspan="3"><input name="confirmpass"  type="password"/></td>
  </tr>

  <tr class="unnamed1">
    <td >Role :</td>
		<td width=""><b><?php echo $r['Role']; ?> </b>
		<input name="oldrole" id="oldrole"  type="hidden" value="<?php echo $r['Role'];?>" /></td>
		<td width=""  style="padding-left:100px"><font color="Orange"> <b>Change :</td>		
		<td>
		<select name="role" id="role" > 
      <option value="<?php echo $r['Role'];?>">Choose Role:</option>
      <option value="user">User</option>
      <option value="viewer">Viewer</option>
      <option value="admin">Administrator</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="12%"><input name="submit" type="submit" value="Update"></td>
    <td width="24%"><input name="cancel"   type="reset" value="Reset" ></td>
</form>

    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
