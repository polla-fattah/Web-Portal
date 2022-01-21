<?php
include "include_files/checksession.php";
include "include_files/connect.php";
include "include_files/paths.php";


$added=false;
$ebookfilename="";
$ebookfile_size="";
$imagefilename="";

if(isset($_POST['submit'])) 
{ 

// uploading of ebook 
  
  list($key,$value) = each($_FILES["file"]["name"]);
  
  if(!empty($value))
    if ($_FILES["file"]["error"][$key] > 0) 
    {
		    echo "Error: " . $_FILES["file"]["error"][$key] . "<br/>" ;
    }
  
    else 
    {
        $source = $_FILES["file"]["tmp_name"][$key] ;
        $ebookfilename = $_FILES["file"]["name"][$key] ;
        $ebookfile_size =$_FILES['file']['size'][$key];
        if($ebookfile_size>=1048576)
				   $ebookfile_size=round ($ebookfile_size/1048576) ." MB";
				else
					 $ebookfile_size=round ($ebookfile_size/1024) ." KB";
				
				$ebookfilename=str_replace(" ", "_", $ebookfilename);
				$ebookfilename=str_replace("-", "_", $ebookfilename);
				$ebookfilename=str_replace("'", "", $ebookfilename);
        move_uploaded_file($source, $ebooksPath . $ebookfilename) ;
        //echo "Uploaded: ebook " . $destpath . $ebookfilename ."  ".$ebookfile_size. "<br/>" ;
    }

//uploading of image (cover)

 // if (($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/pjpeg"))
 // {
    list($key,$value) = each($_FILES["file"]["name"]); 
    if(!empty($value))
      if ($_FILES["file"]["error"][$key] > 0) 
  		{
       echo "Error: " . $_FILES["file"]["error"][$key] . "<br/>" ;
      }
      else 
      {
     	 $source = $_FILES["file"]["tmp_name"][$key] ;
       $imagefilename = $_FILES["file"]["name"][$key] ;
			 $imagefilename=str_replace(" ", "_", $imagefilename);
			 $imagefilename=str_replace("-", "_", $imagefilename);
			 $imagefilename=str_replace("'", "", $imagefilename);
			 $ebookfilename=str_replace(" ", "_", $ebookfilename);
			 $ebookfilename=str_replace("-", "_", $ebookfilename);
			 $ebookfilename=str_replace("'", "", $ebookfilename);

       move_uploaded_file($source, $ebooksCoversPath . $imagefilename) ;
      //echo "Uploaded: image " . $destpath . $imagefilename. "<br/>" ;
      }
	 
	
//removing extenstion
/*$ebookfilename=str_replace("_", " ", $ebookfilename);

$i=strpos($ebookfilename,".");
$ebookName=substr($ebookfilename,0,$i);
if($_POST['title']!="")
 $ebooktitle=$_POST['title'];
else 
 $ebooktitle=$ebookName;
$ebookfilename=str_replace(" ", "_", $ebookfilename);
*/

  include "include_files/connect.php";
	
  $db = mysql_connect($server,$username,$password) or DIE("Connection to database failed, perhaps the service is down !!");
  mysql_select_db($db_name) or DIE("Database name not available !!");

  if (!mysql_query("INSERT INTO ebooks (Name, description, size, type, summary, category, required_software, image_path, ebook_path, submit_date)		 VALUES ('$_POST[title]','$_POST[description]','$ebookfile_size','$_POST[ebooktype]','$_POST[summary]','$_POST[category]','$_POST[software]','$imagefilename','$ebookfilename', '$_POST[sdate]')",$db))
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
	
	 	 var ebook_title = document.getElementById("title");
  	 if(ebook_title.value==null || ebook_title.value==""){
		 	err="Ebook Title is required\n"; ok =false;}
			
				var ebook_name = document.getElementById("ebookname");
  	if(ebook_name.value==null || ebook_name.value==""){
		 	err="Please Specify a ebook to upload\n"; ok =false;}
			
			var combo1 = document.getElementById("category");
			var choice = combo1.options[combo1.selectedIndex].text;
			
		if( choice=="... Select Category ..."){
			err+="Please choose the category\n";ok =false;}							
			
  }
	if(ok==false)
			alert("Error :\n"+err);
	return ok;
}
</script>
<style type="text/css">


<title>Control Panel - Edit Ebooks</title>
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
		 					echo"<tr> <td colspan=4 ><font color=#008000>ebook Added Successfuly.</font></td></tr>";
	?>
  <tr>
    <td colspan="4" class="unnamed1"><span class="style2">Add ebooks</span></td>
  </tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
 <form onsubmit="return validate_form(this)"  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="post" enctype="multipart/form-data">
  <tr class="unnamed1">
    <td>Ebook Title (required) : </td>
    <td colspan="3"><input name="title"  type="text" id="title"/></td>
  </tr>

  <tr class="unnamed1">
    <td width="30%">Ebook File (required):</td>
		
    <td colspan="3"><input type="file"  name="file[]" id="ebookname" /></td>
  </tr>
  <tr class="unnamed1">
    <td>Ebook Cover(Image) : </td>
    <td colspan="3"><input type="file" name="file[]"/></td>
  </tr>
  <tr class="unnamed1">
    <td>Info : </td>
    <td colspan="3"><input name="description"  type="text"/></td>
  </tr>
  <tr class="unnamed1">
    <td>Type:</td>
    <td colspan="3"><input name="ebooktype"  type="text"/></td>
  </tr>
  <tr class="unnamed1">
    <td>Category (required):</td>
    <td colspan="3"><select name="category"  id="category" >
<option value="#">... Select Category ...</option>	
<?php 
include "include_files/connect.php";
	$result = mysql_query("select * from ebook_categories",$db);
	
	while($row = mysql_fetch_array($result))
  {
   echo "<option>".$row['category']."</option>";
	}
?>	
</select></td>
  </tr>
  <tr class="unnamed1">
    <td>Required Software :</td>
    <td colspan="3"><input name="software"  type="text" value="Acrobat Reader"/></td>
  </tr>
  <tr class="unnamed1">
    <td>Summary: </td>
    <td colspan="3"><textarea name="summary" cols="40" rows="6" ></textarea></td>
  </tr>
  <tr class="unnamed1">
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
		<input type="hidden" name="sdate"   value="<?php echo date("y-m-d"); ?>">

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
