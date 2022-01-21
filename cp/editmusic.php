<?php
include "include_files/checksession.php";
include "include_files/connect.php";
include "include_files/paths.php";


if(isset($_POST['remove'])) 
{ 
  include "include_files/connect.php";
	$q=$_GET["q"];
  $db = mysql_connect($server,$username,$password) or DIE("Connection to database failed, perhaps the service is down !!");
  mysql_select_db($db_name) or DIE("Database name not available !!");
  $result=mysql_query("Select * from music where id='".$q."'",$db);
	$row=mysql_fetch_array($result);
	unlink($musicPath.$row['music_path']);
	//if($row['image_path']!="")
	  //unlink($musicCoversPath.$row['image_path']);	
	
 	mysql_query("DELETE FROM music WHERE id='".$q."'",$db);

  mysql_close($db);
  
}
?>







<html>
<head>

<style type="text/css">


<title>Control Panel - Edit/Remove Music</title>
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
.style3 {color: #FFFFFF; font-weight: bold; }
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
<table width="80%" border="0" align="center">
  <tr>
    <td bgcolor="#CCCCCC" height="60"><div align="center" class="style1" >Control Panel </div></td>
  </tr>
</table>
<table width="80%" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="noneB">
  <tr>
    <td height="30" colspan="3"><a href="main.php" class=lang style="text-decoration:none"><b>Back</b></a></td>
		<td align="right" style="padding-right: 20px">Welcome,  <b><?php echo $_SESSION["username"]; ?></b></td>
  </tr>
	<tr> <td colspan=4><hr /></td></tr>
  <tr>
    <td colspan="4" class="unnamed1"><span class="style2">Edit Music</span></td>
  </tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr>
	<td  colspan="4">
	<table width="100%" border="1">
  <tr bordercolor="#990000" bgcolor="#CC33CC">
    <td width="5"><span class="style3">ID</span></td>
    <td width=""><span class="style3">Title</span></td>
    <td width=""><span class="style3">Artist</span></td>
		<td width=""><span class="style3">Release Date</span></td>
    <td width=""><span class="style3">Info</span></td>
    <td width=""><span class="style3">Size</span></td>
    <td width=""><span class="style3">Type</span></td>
    <td width=""><span class="style3">Category</span></td>
    <td width=""><span class="style3">Software</span></td>
    <td width=""><span class="style3">Cover Image </span></td>
    <td width=""><span class="style3">Path</span></td>
    <td ><span class="style3">Edit</span></td>
    <td ><span class="style3">Remove</span></td>
  </tr>


		
		
			
<?php
include "include_files/connect.php";
include "include_files/paths.php";
$result = mysql_query("select * from music order by id desc ",$db);

	while($row = mysql_fetch_array($result))
  {
	  
		echo '<tr bordercolor="#990000" bgcolor="#FFFFFF" border=1>';
    echo '<td border=1><span class="style4">'. $row["id"] .'</span></td>';
    echo '<td border=1><span class="style4">'. $row["name"] .'</span></td>';
		echo '<td border=1><span class="style4">'. $row["artist_name"] .'</span></td>';
		echo '<td border=1><span class="style4">'. $row["release_date"] .'&nbsp</span></td>';
    echo '<td border=1><span class="style4">'. $row["description"] .'&nbsp</span></td>';
    echo '<td border=1><span class="style4">'. $row["size"] .'</span></td>';
    echo '<td border=1><span class="style4">'. $row["type"] .'&nbsp</span></td>';
    echo '<td border=1><span class="style4">'. $row["category"] .'&nbsp</span></td>';
    echo '<td border=1><span class="style4">'. $row["Required_software"] .'&nbsp</span></td>';
    echo '<td width=40 border=1><img src='.$musicCoversPath.$row["image_path"] . ' width=40 height=62 border=0></img></td>';
    echo '<td border=1><span class="style4">'. $row["music_path"] .'</span></td>';
   

     
    echo("<td align=center><a href=editmusicfunction.php?q=".$row['id'].">Edit</a></td>"); 
		 echo("<td align=center valign=middle style=padding-top:10px><form  action=editmusic.php?q=".$row['id']. " method=post><input name=remove type=submit value=Remove   /></form></td></tr>\n\n");
	 echo '</tr>';
	} 
	

?>

     
  </tr>
</table>
</body>
</html>
