<?php
include "include_files/checksession.php";
include "include_files/connect.php";
include "include_files/paths.php";


$added=false;
$musicfilename="";
$musictitle="";
$musicfile_size="";
$imagefilename="";

if(isset($_POST['submit'])) 
{ 
	$folder = "../fuploads/music/";
	if (is_uploaded_file($HTTP_POST_FILES['filename']['tmp_name']))  {  
	    if (move_uploaded_file($HTTP_POST_FILES['filename']['tmp_name'], $folder.$HTTP_POST_FILES['filename']['name'])) {
	         Echo "File uploaded";
	    } else {
	         Echo "File not moved to destination folder. Check permissions";
	    };
	} else {
	     Echo "File is not uploaded.";
	}; 



		$imagefilename=str_replace(" ", "_", $imagefilename);
			 $imagefilename=str_replace("-", "_", $imagefilename);
			 $imagefilename=str_replace("'", "", $imagefilename);
  
	
//removing extenstion
/*$musicfilename=str_replace("_", " ", $musicfilename);
$i=strpos($musicfilename,".");
$musicName=substr($musicfilename,0,$i);
if($_POST['title']!="")
 $musictitle=$_POST['title'];
else 
 $musictitle=$musicName;
$musicfilename=str_replace(" ", "_", $musicfilename);
*/

  include "include_files/connect.php";
	
  $db = mysql_connect($server,$username,$password) or DIE("Connection to database failed, perhaps the service is down !!");
  mysql_select_db($db_name) or DIE("Database name not available !!");

  if (!mysql_query("INSERT INTO music (Name, artist_name , description, size, type, summary, category, required_software, image_path, music_path, submit_date, release_date)		 VALUES ('$_POST[title]','$_POST[artist]','$_POST[description]','$musicfile_size','$_POST[musictype]','$_POST[summary]','$_POST[category]','$_POST[software]','$imagefilename','$musicfilename', '$_POST[sdate]', '$_POST[rdate]')",$db))
  {
    die('Err3: ' . mysql_error());
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
	  var atist_name = document.getElementById("artist");
		if(atist_name.value==null || atist_name.value==""){
		 	err="Artist Name is required \n"; ok =false;}
			
		
			
		 		var music_title = document.getElementById("title");
		if(music_title.value==null || music_title.value==""){
		 	err="music Title is required \n"; ok =false;}
			
				var music_name = document.getElementById("musicname");
  	if(music_name.value==null || music_name.value==""){
		 	err="Please Specify a music to upload\n"; ok =false;}
			
			var combo1 = document.getElementById("category");
			var choice = combo1.options[combo1.selectedIndex].text;
			
		if( choice=="... Select Category ..."){
			err+="Please choose the category\n";ok =false;}							
			
  }
	if(ok==false)
			alert("Err4 :\n"+err);
	return ok;
}
</script>

<title>Control Panel - Add Music</title>
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
		 					echo"<tr> <td colspan=4 ><font color=#008000>Music Added Successfuly.</font></td></tr>";
	?>
  <tr>
    <td colspan="4" class="unnamed1"><span class="style2">Add Music</span></td>
  </tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
 <form onsubmit="return validate_form(this)"  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="post" enctype="multipart/form-data">
  <tr class="unnamed1">
    <td>Music Title (required) : </td>
    <td colspan="3"><input name="title"  type="text" id="title"/></td>
  </tr> 
  <tr class="unnamed1">
    <td>Artist Name (required) : </td>
    <td colspan="3"><input name="artist"  type="text" id="artist"/></td>
  </tr> 
  <tr class="unnamed1">
    <td>Release Date (YYYY) : </td>
    <td colspan="3"><input name="rdate"  type="text" id="rdate" /></td>
  </tr> 

  <tr class="unnamed1">
	    <td width="30%">Music file (required):</td>
		
    <td colspan="3"><input type="file"  name="musicfile" id="musicname" /></td>
  </tr>
  <tr class="unnamed1">
    <td>Music Cover(Image) : </td>
    <td colspan="3"><input type="file" name="coverfile"/></td>
  </tr>
  <tr class="unnamed1">
    <td>Info : </td>
		<td colspan="3">
			<select name="description"  id="description" >
		  <option value="Album">Album</option>
		  <option value="Track">Track</option>
		  </select>
    </td>
  </tr>
  <tr class="unnamed1">
    <td>Type:</td>
    <td colspan="3"><input name="musictype"  type="text" value="MP3"/>		</td>
  </tr>
  <tr class="unnamed1">
    <td>Category (required):</td>
    <td colspan="3"><select name="category"  id="category" >
<option value="#">... Select Category ...</option>	
<?php 
include "include_files/connect.php";
	$result = mysql_query("select * from music_categories",$db);
	
	while($row = mysql_fetch_array($result))
  {
   echo "<option>".$row['category']."</option>";
	}
?>	
</select></td>
  </tr>
  <tr class="unnamed1">
    <td>Required Software :</td>
    <td colspan="3"><input name="software"  type="text" value="Media Player"/></td>
  </tr>
  <tr class="unnamed1">
    <td>Summary: </td>
    <td colspan="3"><textarea name="summary" cols="40" rows="6" ></textarea></td>
  </tr>
  <tr class="unnamed1">
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
	<input type="hidden" name="sdate"   value="<?php echo date('y-m-d'); ?>">
  <tr>
    <td>&nbsp;</td>
    <td width="12%"><input name="submit" type="submit" value="Upload"></td>
    <td width="24%"><input name="cancel"   type="reset" value="Reset" ></td>
</form>
    <td width="34%">&nbsp;</td>
  </tr>
</table>
</body>
</html>
