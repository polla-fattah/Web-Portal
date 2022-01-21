<?php
include "include_files/checksession.php";
include "include_files/connect.php";
include "include_files/paths.php";


$added=false;
$musicfilename="";
$musicfile_size="";
$imagefilename="";
$newcategory="";
$musicName="";

if(isset($_POST['submit'])) 
{ 
    // uploading of music 
   
    list($key,$value) = each($_FILES["file"]["name"]);
    if(!empty($value))
		{
      if ($_FILES["file"]["error"][$key] > 0) 
      {
        echo "Error: " . $_FILES["file"]["error"][$key] . "<br/>" ;
      }
      else 
      {
        $source = $_FILES["file"]["tmp_name"][$key] ;
        $musicfilename = $_FILES["file"]["name"][$key] ;
        $musicfile_size = ceil($_FILES['file']['size'][$key]/1048576) . " MB";
				$musicfilename=str_replace(" ", "_", $musicfilename);

     		move_uploaded_file($source, $musicsPath . $musicfilename) ;
				unlink($musicsPath.$_POST['oldmusicnameComplete']);
       
			 // $i=strpos($musicfilename,".");
        //$musicName=substr($musicfilename,0,$i);

      }
    }
		else 
		{
		  $musicfilename=$_POST['oldmusicnameComplete'];
		 //	$musicName=$_POST['oldmusicname'];
			$musicfile_size=$_POST['size'];
			
		}
				$musictitle=$_POST['oldmusicname'];

    //uploading of image (cover)
    list($key,$value) = each($_FILES["file"]["name"]); 
    if(!empty($value))
		{
      if ($_FILES["file"]["error"][$key] > 0) 
  		{
			  echo "Error: " . $_FILES["file"]["error"][$key] . "<br/>" ;
      }
      else 
      {
        $source = $_FILES["file"]["tmp_name"][$key] ;
        $imagefilename = $_FILES["file"]["name"][$key] ;
			  $imagefilename=str_replace(" ", "_", $imagefilename);

        move_uploaded_file($source, $musicCoversPath . $imagefilename) ;
			//	if($_POST['oldimagename']!="")
				//  unlink($musicCoversPath.$_POST['oldimagename']);

       // echo "Uploaded: image " . $destpath . $imagefilename. "<br/>" ;
      }
    }
		else 
		{
		 	$imagefilename=$_POST['oldimagename'];
		}
		
		$newcategory=$_POST['category'];
		if($newcategory=="... Select Category ..." || $newcategory=="#")
			 $newcategory=$_POST['oldcategory'];
		
		$newdescription=$_POST['description'];
		if($newdescription=="... Select ..." || $newdescription=="#")
			 $newdescription=$_POST['olddescription'];
			
			
		
    include "include_files/connect.php";
    $db = mysql_connect($server,$username,$password) or DIE("Connection to database failed, perhaps the service is down !!");
    mysql_select_db($db_name) or DIE("Database name not available !!");
    if (!mysql_query("Update music SET Name ='$musictitle', artist_name='$_POST[artist]', description='$newdescription', size='$musicfile_size', type='$_POST[musictype]', summary='$_POST[summary]', category='$newcategory', required_software='$_POST[software]', image_path='$imagefilename', music_path='$musicfilename', release_date='$_POST[rdate]'	Where id='".$_POST['id']."'",$db))
    {
      die('Error: ' . mysql_error());
    }
  	else $added=true;
    mysql_close($db);
}

?>

<html>
<head>

<title>Control Panel - Edit Music</title>
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
    <td height="" colspan="3"><a href="editmusic.php" class=lang style="text-decoration:none"><b>Back</b></a></td>
		<td align="right" style="padding-right:20px; padding-bottom:0px">Welcome,  <b><?php echo $_SESSION["username"]; ?></b></td>
  </tr>
	<tr> <td colspan=4 style="padding-top:0px; padding-bottom:15px; padding-top:0px"><hr /></td></tr>
  <?php 
	
	if($added==true)  
		 					echo"<tr> <td colspan=4 ><font color=#008000>Music Updated Successfuly.</font></td></tr>";
	?>
  <tr>
    <td colspan="4" class="unnamed1"><span class="style2">Edit Music</span></td>
  </tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<?php


include "include_files/connect.php";
include "include_files/paths.php";
				if(!isset($_POST['submit']))
						$q="SELECT *  FROM music WHERE id ='". $_GET['q']."'";			
				else
						$q="SELECT *  FROM music WHERE id ='". $_POST['id']."'";						
				$rs=mysql_query($q,$db) or die(mysql_error());			

$r = mysql_fetch_array($rs);
?>
 <form onsubmit="return validate_form(this)"  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="post" enctype="multipart/form-data">
  <tr class="unnamed1">
    <td width="40%"><b>Music Title (required):</td>
		<td width=""> <input name="oldmusicname" id="oldmusicname"  type="text" value="<?php echo $r['name'];?>"</td>
		<td width="" ><font color="Orange"> <b>Change :</td>
    <td colspan="1"><input type="file" name="file[]" id="musicname" /></td>
  </tr>
	<tr class="unnamed1">
    <td colspan="1"><b>Artist Name : </td>
    <td colspan="3"><input name="artist"  type="text" value="<?php echo $r['artist_name'];?>" /></td>
  </tr>	 

  <tr class="unnamed1">
    <td><b>Music Cover(Image) : </td>
		<td width=""><?php echo "<img src=$musicCoversPath".$r['image_path']." width=70 height=95 />";?> <input name="oldimagename" id="oldimagename"  type="hidden" value="<? echo $r['image_path'];?>"</td>
		<td width="" ><font color="Orange"> <b>Change :</td>
    <td colspan="1"><input type="file" name="file[]"/></td>
  </tr>										 <input name="oldmusicnameComplete" id="oldmusicnameComplete"  type="hidden" value="<?php echo $r['music_path'];?>" />
	<tr><td colspan="4"><hr /></td></tr>
  <tr class="unnamed1">
    <td colspan="1"><b>Release Year : </td>
    <td colspan="3"><input name="rdate"  type="text" value="<?php echo $r['release_date'];?>" /></td>
  </tr>
	
	
	  <tr class="unnamed1">
    <td ><b>Info :</td>
		<td width=""><?php echo $r['description']; ?> 
		<input name="olddescription" id="olddescription"  type="hidden" value="<?php echo $r['description'];?>" /></td>
		<td width=""><font color="Orange"> <b>Change :</td>		
    <td colspan="1" ><select name="description"  id="description" >
<option value="#">... Select ...</option>	
<option value="Album">Album</option>
<option value="Track">Track</option>
</select></td>
  </tr>
	
  <tr class="unnamed1">
    <td colspan=1><b>Type:</td>
    <td colspan="3"><input name="musictype"   type="text" value="<?php echo $r['type'];?>" /></td>
  </tr>
  <tr class="unnamed1">
    <td ><b>Category :</td>
		<td width=""><?php echo $r['category']; ?> 
		<input name="oldcategory" id="oldcategory"  type="hidden" value="<?php echo $r['category'];?>" /></td>
		<td width=""><font color="Orange"> <b>Change :</td>		
    <td colspan="1" ><select name="category"  id="category" >
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
    <td><b>Required Software :</td>
    <td colspan="1"><input name="software"  type="text" value="<?php echo $r['Required_software'];?>" /></td>
  </tr>
	<tr><td colspan="4"><hr /></td></tr>
  <tr class="unnamed1">
    <td><b>Summary: </td>
    <td colspan="3"><textarea name="summary" cols="40" rows="6" ><?php echo $r['summary'];?></textarea></td>
  </tr>
	 
  <tr class="unnamed1">
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>

	
  <tr>
    <td>&nbsp;</td>
		<input type="hidden" name="size" id="size" value="<?php echo $r['size'];?>" />
		<input type="hidden" name="id" id="id" value="<?php echo $r['id'];?>" />
    <td width="12%"><input name="submit" type="submit" value="Update"></td>
    <td width="24%"><input name="cancel"   type="reset" value="Reset" ></td>
</form>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
