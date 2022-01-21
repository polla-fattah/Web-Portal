<?php
/*include "include_files/paths.php";
if(isset($_GET['f']))
{
  header("Content-disposition: attachment; filename=\"".$_GET['f']."\"");
  header('Content-type: application/download');
  readfile($ebooksPath.$_GET['f']);
}*/
?>
<?php 
include "include_files/connect.php";
include "include_files/paths.php";


$orderIndex="id";
	   	 	$pageNumber = 0;
			if(isset($_GET['pageNumber']))
			$pageNumber = $_GET['pageNumber'];
			$showNum = 100;		
			$startFrom = ($pageNumber * $showNum);
			
			$ebooks_rs="";
			$programs_rs="";
			$music_rs="";
			$movies_rs="";
			
			//$searchtxt="";
			if(isset($_POST['searchtxt']))
			  $searchtxt=$_POST['searchtxt'];
			if(isset($_GET['searchtxt']))
			  $searchtxt=$_GET['searchtxt'];

			  
			   if(!isset($_GET['subcat']))
				 {
						$q="SELECT * FROM ebooks where  Name LIKE '%".$searchtxt."%' OR description LIKE '%".$searchtxt."%'  order by $orderIndex desc Limit $startFrom, $showNum;";
		  			 $ebooks_rs=mysql_query($q,$db) or die(mysql_error());			

						$q="SELECT * FROM programs where  Name LIKE '%".$searchtxt."%' OR description LIKE '%".$searchtxt."%'  order by $orderIndex desc Limit $startFrom, $showNum;";
		  			 $programs_rs=mysql_query($q,$db) or die(mysql_error());			

						$q="SELECT * FROM movies where  Name LIKE '%".$searchtxt."%' OR description LIKE '%".$searchtxt."%'  order by $orderIndex desc Limit $startFrom, $showNum;";
		  			 $movies_rs=mysql_query($q,$db) or die(mysql_error());			

						$q="SELECT * FROM music where  Name LIKE '%".$searchtxt."%' OR description LIKE '%".$searchtxt."%' OR artist_name LIKE '%".$searchtxt."%' order by $orderIndex desc Limit $startFrom, $showNum;";
		  			 $music_rs=mysql_query($q,$db) or die(mysql_error());			
					} 

			   else
				 {
				 		if($_GET['subcat']=="Ebooks" || $_GET['secondTime']=="yes")
						{
						   $q="SELECT * FROM ebooks where  Name LIKE '%".$searchtxt."%' OR description LIKE '%".$searchtxt."%'  order by $orderIndex desc Limit $startFrom, $showNum;";
		  			   $ebooks_rs=mysql_query($q,$db) or die(mysql_error());			
						}
						if($_GET['subcat']=="Programs" || $_GET['secondTime']=="yes")
						{
						   $q="SELECT * FROM programs where  Name LIKE '%".$searchtxt."%' OR description LIKE '%".$searchtxt."%'  order by $orderIndex desc Limit $startFrom, $showNum;";
		  			   $programs_rs=mysql_query($q,$db) or die(mysql_error());			
						}
						if($_GET['subcat']=="Movies" || $_GET['secondTime']=="yes")
						{
						   $q="SELECT * FROM movies where  Name LIKE '%".$searchtxt."%' OR description LIKE '%".$searchtxt."%'  order by $orderIndex desc Limit $startFrom, $showNum;";
		  			   $movies_rs=mysql_query($q,$db) or die(mysql_error());			
						}
						if($_GET['subcat']=="Music" || $_GET['secondTime']=="yes")
						{
						   $q="SELECT * FROM music where  Name LIKE '%".$searchtxt."%' OR description LIKE '%".$searchtxt."%' OR artist_name LIKE '%".$searchtxt."%' order by $orderIndex desc Limit $startFrom, $showNum;";
		  			   $music_rs=mysql_query($q,$db) or die(mysql_error());
						}			
					} 
				
//				$nr = mysql_num_rows($rs); //Number of rows found with LIMIT in action
				
//				if(isset($_GET['subcat']))
	//				$pageCount = mysql_query("select count(*) as pc from ebooks where category='".$cat."'");
//				else
	//			 $pageCount = mysql_query("select count(*) as pc from ebooks"); 
		//		$pageCount = mysql_fetch_array($pageCount);
			//	$pageCount = floor($pageCount['pc']/$showNum);


 ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript">
<!--
function checkInput()
{
 if(document.getElementById("searchtxt").value=="" || document.getElementById("searchtxt").value=="Search the Website")
 {
 	 alert("Enter Keyword to search for");
	 return false;
	}
}
//-->
</script>

<title>WeGo Portal</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body  >
<table border="0" cellpadding="0" cellspacing="0" align="center" width="">
	<tr>
		<td height="143" width="240"><a href="index.php"><img src="images/wego1.jpg" width="200" height="37" border="0" alt="Your company name"></a></td>
		<td width="903">
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td><img src="images/c1.gif" width="5" height="5" border="0" alt=""></td>
					<td style="background: url(images/c_top.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
					<td><img src="images/c2.gif" width="5" height="5" border="0" alt=""></td>
				</tr> 
				<tr>
					<td style="background: url(images/c_left.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
					<td width="893" align="center" height="100"><?php include "include_files/flashheader.php"; ?></td>
					<td style="background: url(images/c_right.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
				</tr>
				<tr>
					<td><img src="images/c4.gif" width="5" height="5" border="0" alt=""></td>
					<td style="background: url(images/c_bot.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
					<td><img src="images/c3.gif" width="5" height="5" border="0" alt=""></td>
				</tr>
			</table>
		</td>
		<td><img src="images/spacer.gif" width="5" height="1" border="0" alt=""></td>
	</tr>
</table>




<table border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td><img src="images/menu_left.gif" width="7" height="40" border="0" alt=""></td>
		<td width="1135" style="background: url(images/menu_bg.gif)">
		
		
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<form onsubmit="return checkInput(this)" action="search.php" name="searchform" method="post">  <!-- edited -->
					<td><div style="padding: 0 6px 0 7px"><input type="text" name="searchtxt" onclick=searchtxt.value=""  Price="60" maxlength="256" class="search" value="Search the Website"></div></td>
					<td><input type="image" src="images/menu_go.gif"  border="0" width="38" height="28" alt=""></td>
					</form>
					<td width="22"></td>
					<td><img src="images/menu_line.gif" width="2" height="29" border="0" alt="" hspace="16"></td>
					<td><div class="mb">Movies</div> 
					<div class="mw"><a href="index.php" class="aw">Movies</a></div></td>
					<td><img src="images/menu_line.gif" width="2" height="29" border="0" alt="" hspace="13"></td>
					<td><div class="mb">Music</div> 
					<div class="mw"><a href="music.php" class="aw">Music</a></div></td>
					<td><img src="images/menu_line.gif" width="2" height="29" border="0" alt="" hspace="13"></td>
					<td><div class="mb">Programs</div> 
					<div class="mw"><a href="programs.php" class="aw">Programs</a></div></td>
					<td><img src="images/menu_line.gif" width="2" height="29" border="0" alt="" hspace="13"></td>
					<td><div class="mb">Ebooks</div> 
					<div class="mw"><a href="ebooks.php" class="aw">Ebooks</a></div></td>
					<td><img src="images/menu_line.gif" width="2" height="29" border="0" alt="" hspace="13"></td>
					<td width="700"></td>
					<td><img src="images/menu_line.gif" width="2" height="29" border="0" alt="" hspace="13"></td>
					<td><div class="mb">www.mywego.com</div> 
					<div class="mw"><a href="http://www.mywego.com" target="_self" class="aw">www.mywego.com</a></div></td>
					
					
					
				</tr>
			</table>
		
		</td>
		<td><img src="images/menu_right.gif" width="6" height="40" border="0" alt=""></td>
	</tr>
</table>
<div><img src="images/spacer.gif" width="1" height="7" border="0" alt=""></div>



<table border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td valign="top">
			<table border="0" cellpadding="0" cellspacing="0"  style="background: url(images/left_bg.gif)">
				<tr>
					<td><img src="images/left_left.gif" width="21" height="29" border="0" alt=""></td>
					<td><img src="images/spacer.gif" width="7" height="1" border="0" alt=""></td>
					<td width="170"><div class="lb">BROWSE BY CATEGORIES</div> 
					<div class="lw">BROWSE BY CATEGORIES</div></td>
					<td><img src="images/left_right.gif" width="6" height="29" border="0" alt=""></td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0">
			   	<tr>
					<td style="background: url(images/c_left.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
					<td width="194" align="center">
						
						<table border="0" cellpadding="0" cellspacing="0">
						  <tr>
							 <td>
							 <?php
							// if(!isset($_GET['subcat']))
							  // if($movies_rs!="")
							    if (mysql_num_rows($movies_rs) > 0)
							 		{
    					 			  print '<div class="lmenu"><img src="images/ico2.gif" width="7" height="5" border="0" alt="" hspace="6"><a href=search.php?subcat=Movies&secondTime=yes&searchtxt='.$searchtxt.'   class="top11">Movies Results</a></div>';
										  print '<div><img src="images/line_h2.gif" width="186" height="1" border="0" alt=""></div>';
    					 		}
								// if($music_rs!="")	
									if (mysql_num_rows($music_rs) > 0)
									{
										  print   '<div class="lmenu"><img src="images/ico2.gif" width="7" height="5" border="0" alt="" hspace="6"><a href=search.php?subcat=Music&secondTime=yes&searchtxt='.$searchtxt.'   class="top11">Music Results</a></div>';
										  print   '<div><img src="images/line_h2.gif" width="186" height="1" border="0" alt=""></div>';
    					 		}
								// if($programs_rs!="")
									if (mysql_num_rows($programs_rs) > 0) 
									{									 
										  print   '<div class="lmenu"><img src="images/ico2.gif" width="7" height="5" border="0" alt="" hspace="6"><a href=search.php?subcat=Programs&secondTime=yes&searchtxt='.$searchtxt.'   class="top11">Programs Results</a></div>';
										  print   '<div><img src="images/line_h2.gif" width="186" height="1" border="0" alt=""></div>';
    					 		}
								//if($ebooks_rs!="")
									if (mysql_num_rows($ebooks_rs) > 0)
									{
										  print   '<div class="lmenu"><img src="images/ico2.gif" width="7" height="5" border="0" alt="" hspace="6"><a href=search.php?subcat=Ebooks&secondTime=yes&searchtxt='.$searchtxt.'  class="top11">Ebooks Results</a></div>';
										  print   '<div><img src="images/line_h2.gif" width="186" height="1" border="0" alt=""></div>';
									}
         			 ?>
      						
								</td>
							</tr>
						</table>
					</td>
			   		<td style="background: url(images/c_right.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
			   	</tr>
				<tr>
					<td><img src="images/c4.gif" width="5" height="5" border="0" alt=""></td>
					<td style="background: url(images/c_bot.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
					<td><img src="images/c3.gif" width="5" height="5" border="0" alt=""></td>
				</tr>
			</table>
			
			
			
			
<!-- ********** For Number of Visistors Table ************ -->


<?php include "include_files/visitorstable.php"; ?>

<!-- ********* End of ************************-->			
			
				
			<div><img src="images/spacer.gif" width="1" height="7" border="0" alt=""></div>
  	</td>
		<td><img src="images/spacer.gif" width="4" height="1" border="0" alt=""></td>
		<td valign="top">
			
			<table border="0" cellpadding="0" cellspacing="0"  style="background: url(images/left_bg.gif)">
				<tr>
					<td><img src="images/left_left.gif" width="21" height="29" border="0" alt=""></td>
					<td><img src="images/spacer.gif" width="7" height="1" border="0" alt=""></td>
					<td width="903"><div class="lb"><?php if(isset($_GET['subcat'])) echo $_GET['subcat']. " Results"; else echo "Search Results -ALL";?></div> 
					<div class="lw"><?php if(isset($_GET['subcat']))echo $_GET['subcat']. " Results"; else echo "Search Results -ALL";?></div></td>
					<td><img src="images/left_right.gif" width="6" height="29" border="0" alt=""></td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td style="background: url(images/c_left.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
					<td width="909" align="center">
					<div><img src="images/spacer.gif" width="1" height="12" border="0" alt=""></div>
					<table border="0" cellpadding="0" cellspacing="0" width="926">
<?php


$counter=0;

if(!isset($_GET['subcat']) || $_GET['subcat']=="Movies")
if (mysql_num_rows($movies_rs) > 0) 
{
 while($r = mysql_fetch_array($movies_rs))
 {

// <!-- A complete Row with spaces !-->					
					if($counter%5==0)
					{
					 echo"	<tr>";
					}
//	<!-- A TD with space(complete) --> 						
						 echo '<td  rowspan="2" valign="top">';

								echo '<table border="0" cellpadding="0" cellspacing="0" >';
									echo '<tr>';
									if(trim($r['image_path'])!="")
										 echo '<td  rowspan="0" width="50" align="center" valign="top"><a href=movie_info.php?id='.$r['id'].' ><img src='.$moviescoverspath.$r['image_path'].' width="40" height="45" border="0" alt=""></a></td>';
  								else 
										  echo '<td  rowspan="0" width="50" align="center" valign="top"><a href=movie_info.php?id='.$r['id'].' ><img src='.$moviescoverspath.'xxxmoviexxx.jpg' . ' width="40" height="45" border="0" alt=""></a></td>';
			
											echo '<td width="97.25" valign="top">';
											
											 echo '<table  border="0" cellpadding="0" cellspacing="0">';
  											echo '<tr><td height="70" valign="top"><div class="item_name" style="padding-top: 0px">'. $r['name'] .'</div></td></tr>';
  											echo '<tr><td height="35" valign="bottom"><div class="item_Price" style="padding-bottom: 0px"><span class="top11">Info: </span>'.$r['description'].'</div></td></tr>';											
									      echo '<tr><td valign="middle"  height="10"><div class="item_Price" style="padding-bottom: 0px"><span class="top11">Size: </span>'.$r['size'].'</div></td></tr>';
										  	echo '<tr><td height="25" valign="bottom"><div style="padding-bottom: 0px"><a href=movie_info.php?id='.$r['id'].'  ><img src="images/but_info.gif" width="53" height="23" border="0" alt=""></a><a href=download.php?f='.$r['movie_path'].'&source=movies'.' target="_self"><img src="images/but_buy.gif" width="55" height="23" border="0" alt=""></a></div></td></tr>';
							         echo '</table>';
											
											echo '</td>';
									  echo '</tr>';
									echo '</table>';
							echo '</td>';


							$counter=$counter+1;
							if($counter%5!=0 )
							 echo '<td style="background: url(images/bg_ver.gif) repeat-y center" height="160" width="1"><img src="images/spacer.gif" width="14" height="1" border="0" alt=""></td>';
  // <!-- End of a TD-->	
	      	
					if($counter%5==0)
					{
					 echo ' </tr>';
					 echo ' <tr></tr>';
					}
					
//	<!-- End of Row-->				 
					if($counter%5==0 )
					{
						echo '<tr>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
							echo '<td><img src="images/spacer.gif" width="1" height="49" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
							echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
						  echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
						  echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
						  echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';

						echo '</tr>';
					}
	}     //end of while loop
}			


if(!isset($_GET['subcat']) || $_GET['subcat']=="Music")
if (mysql_num_rows($music_rs) > 0) 
{
 while($r = mysql_fetch_array($music_rs))
 {

// <!-- A complete Row with spaces !-->					
					if($counter%5==0)
					{
					 echo"	<tr>";
					}
//	<!-- A TD with space(complete) --> 						
						 echo '<td  rowspan="2" valign="top">';

								echo '<table border="0" cellpadding="0" cellspacing="0" >';
									echo '<tr>';
									if(trim($r['image_path'])!="")
										 echo '<td  rowspan="0" width="50" align="center" valign="top"><a href= music_info.php?id='.$r['id'].' ><img src='.$musiccoverspath.$r['image_path'].' width="40" height="45" border="0" alt=""></a></td>';
  								else 
										  echo '<td  rowspan="0" width="50" align="center" valign="top"><a href=music_info.php?id='.$r['id'].' ><img src='.$musiccoverspath.'xxxmusicxxx.jpg' . ' width="40" height="45" border="0" alt=""></a></td>';
			
											echo '<td width="97.25" valign="top">';
											
											 echo '<table  border="0" cellpadding="0" cellspacing="0">';
  											echo '<tr><td height="70" valign="top"><div class="item_name" style="padding-top: 0px">'. $r['name'] .'</div></td></tr>';
  											echo '<tr><td height="35" valign="top"><div class="item_Price" style="padding-bottom: 0px"><span class="top11">Artist: </span>'.$r['artist_name'].'</div></td></tr>';											
  											echo '<tr><td height="10" valign="bottom"><div class="item_Price" style="padding-bottom: 0px"><span class="top11">Year: </span>'.$r['release_date'].'</div></td></tr>';											
 											
												echo '<tr><td height="15" valign="bottom"><div class="item_Price" style="padding-bottom: 0px"><span class="top11">Info: </span>'.$r['description'].'</div></td></tr>';											
									      echo '<tr><td valign="middle"  height="10"><div class="item_Price" style="padding-bottom: 0px"><span class="top11">Size: </span>'.$r['size'].'</div></td></tr>';
										  	echo '<tr><td height="25" valign="bottom"><div style="padding-bottom: 0px"><a href=music_info.php?id='.$r['id'].'  ><img src="images/but_info.gif" width="53" height="23" border="0" alt=""></a><a href=download.php?f='.$r['music_path'].'&source=music'.' target="_self"><img src="images/but_buy.gif" width="55" height="23" border="0" alt=""></a></div></td></tr>';
							         echo '</table>';
											
											echo '</td>';
									  echo '</tr>';
									echo '</table>';
							echo '</td>';


							$counter=$counter+1;
							if($counter%5!=0 )
							 echo '<td style="background: url(images/bg_ver.gif) repeat-y center" height="160" width="1"><img src="images/spacer.gif" width="14" height="1" border="0" alt=""></td>';
  // <!-- End of a TD-->	
	      	
					if($counter%5==0)
					{
					 echo ' </tr>';
					 echo ' <tr></tr>';
					}
					
//	<!-- End of Row-->				 
					if($counter%5==0 )
					{
						echo '<tr>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
							echo '<td><img src="images/spacer.gif" width="1" height="49" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
							echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
						  echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
						  echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
						  echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';

						echo '</tr>';
					}
	}     //end of while loop
}			




if(!isset($_GET['subcat']) || $_GET['subcat']=="Programs")
if (mysql_num_rows($programs_rs) > 0) 
{
 while($r = mysql_fetch_array($programs_rs))
 {

// <!-- A complete Row with spaces !-->					
					if($counter%5==0)
					{
					 echo"	<tr>";
					}
//	<!-- A TD with space(complete) --> 						
						 echo '<td  rowspan="2" valign="top">';

								echo '<table border="0" cellpadding="0" cellspacing="0" >';
									echo '<tr>';
									if(trim($r['image_path'])!="")
										 echo '<td  rowspan="0" width="50" align="center" valign="top"><a href=program_info.php?id='.$r['id'].' ><img src='.$programscoverspath.$r['image_path'].' width="40" height="45" border="0" alt=""></a></td>';
  								else 
										  echo '<td  rowspan="0" width="50" align="center" valign="top"><a href=program_info.php?id='.$r['id'].' ><img src='.$programscoverspath.'xxxprogramxxx.jpg' . ' width="40" height="45" border="0" alt=""></a></td>';
			
											echo '<td width="97.25" valign="top">';
											
											 echo '<table  border="0" cellpadding="0" cellspacing="0">';
  											echo '<tr><td height="70" valign="top"><div class="item_name" style="padding-top: 0px">'. $r['name'] .'</div></td></tr>';
  											echo '<tr><td height="35" valign="bottom"><div class="item_Price" style="padding-bottom: 0px"><span class="top11">Info: </span>'.$r['description'].'</div></td></tr>';											
									      echo '<tr><td valign="middle"  height="10"><div class="item_Price" style="padding-bottom: 0px"><span class="top11">Size: </span>'.$r['size'].'</div></td></tr>';
										  	echo '<tr><td height="25" valign="bottom"><div style="padding-bottom: 0px"><a href=program_info.php?id='.$r['id'].'  ><img src="images/but_info.gif" width="53" height="23" border="0" alt=""></a><a href=download.php?f='.$r['program_path'].'&source=programs'.' target="_self"><img src="images/but_buy.gif" width="55" height="23" border="0" alt=""></a></div></td></tr>';
							         echo '</table>';
											
											echo '</td>';
									  echo '</tr>';
									echo '</table>';
							echo '</td>';


							$counter=$counter+1;
							if($counter%5!=0 )
							 echo '<td style="background: url(images/bg_ver.gif) repeat-y center" height="160" width="1"><img src="images/spacer.gif" width="14" height="1" border="0" alt=""></td>';
  // <!-- End of a TD-->	
	      	
					if($counter%5==0)
					{
					 echo ' </tr>';
					 echo ' <tr></tr>';
					}
					
//	<!-- End of Row-->				 
					if($counter%5==0 )
					{
						echo '<tr>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
							echo '<td><img src="images/spacer.gif" width="1" height="49" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
							echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
						  echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
						  echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
						  echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';

						echo '</tr>';
					}
	}     //end of while loop
}			


if(!isset($_GET['subcat']) || $_GET['subcat']=="Ebooks")
if (mysql_num_rows($ebooks_rs) > 0) 
{
 while($r = mysql_fetch_array($ebooks_rs))
 {

// <!-- A complete Row with spaces !-->					
					if($counter%5==0)
					{
					 echo"	<tr>";
					}
//	<!-- A TD with space(complete) --> 						
						 echo '<td  rowspan="2" valign="top">';

								echo '<table border="0" cellpadding="0" cellspacing="0" >';
									echo '<tr>';
									if(trim($r['image_path'])!="")
										 echo '<td  rowspan="0" width="50" align="center" valign="top"><a href=ebook_info.php?id='.$r['id'].' ><img src='.$ebookscoverspath.$r['image_path'].' width="40" height="45" border="0" alt=""></a></td>';
  								else 
										  echo '<td  rowspan="0" width="50" align="center" valign="top"><a href=ebook_info.php?id='.$r['id'].' ><img src='.$ebookscoverspath.'xxxebookxxx.jpg' . ' width="40" height="45" border="0" alt=""></a></td>';
			
											echo '<td width="97.25" valign="top" >';
											
											 echo '<table  border="0" cellpadding="0" cellspacing="0">';
  											echo '<tr><td height="70" valign="top"><div class="item_name" style="padding-top: 0px">'. $r['name'] .'</div></td></tr>';
  											echo '<tr><td height="35" valign="bottom"><div class="item_Price" style="padding-bottom: 0px"><span class="top11">Info: </span>'.$r['description'].'</div></td></tr>';											
									      echo '<tr><td valign="middle"  height="10"><div class="item_Price" style="padding-bottom: 0px"><span class="top11">Size: </span>'.$r['size'].'</div></td></tr>';
										  	echo '<tr><td height="25" valign="bottom"><div style="padding-bottom: 0px"><a href=ebook_info.php?id='.$r['id'].'  ><img src="images/but_info.gif" width="53" height="23" border="0" alt=""></a><a href=download.php?f='.$r['ebook_path'].'&source=ebooks'.' target="_self"><img src="images/but_buy.gif" width="55" height="23" border="0" alt=""></a></div></td></tr>';
							         echo '</table>';
											
											echo '</td>';
									  echo '</tr>';
									echo '</table>';
							echo '</td>';

						$counter=$counter+1;
							if($counter%5!=0 )
							 echo '<td style="background: url(images/bg_ver.gif) repeat-y center" height="160" width="1"><img src="images/spacer.gif" width="14" height="1" border="0" alt=""></td>';
 
					if($counter%5==0)
					{
					 echo ' </tr>';
					 echo ' <tr></tr>';
					}
					
//	<!-- End of Row-->				 
					if($counter%5==0 )
					{
						echo '<tr>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
							echo '<td><img src="images/spacer.gif" width="1" height="49" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
							echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
						  echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
						  echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';
							echo '<td style="background: url(images/bg_hor.gif) repeat-x center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
						  echo '<td><img src="images/spacer.gif" width="1" height="19" border="0" alt=""></td>';

						echo '</tr>';
					}
	}     //end of while loop
}			
	//<!-- End of Complete row -->
/*	  echo '<tr></tr>';
		echo "<tr> <td colspan=10 height=40><hr /></td></tr>";
	echo "<tr> <td colspan=8 align=center>";
					if($pageNumber == 0)
					{		
				
						print "<font class=nolink ><b>« Previous </b></font>";
					}
					
					else
					{
						$pn = $pageNumber - 1;
						if(isset($_GET['subcat']))
							print "<a href ='ebooks.php?subcat=".$cat."&pageNumber=$pn&orderby=$orderIndex' style= Color:blue class=menu>« Previous</a>";
						else 
							print "<a href ='ebooks.php?pageNumber=$pn&orderby=$orderIndex' style= Color:blue class=menu>« Previous</a>";
						
					}
                	
                	print"<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>"; 
                
              		

					
					if($pageNumber == $pageCount )
					{
						print "<font class=nolink><b>Next »</b></font>";
					}
					
					else
					{
						$pn = $pageNumber + 1;
						if(isset($_GET['subcat']))
						  print "<a href ='ebooks.php?subcat=".$cat."&pageNumber=$pn&orderby=$orderIndex' style=color:blue class=menu>Next »</a>";
					  else
						  print "<a href ='ebooks.php?pageNumber=$pn&orderby=$orderIndex' style=color:blue class=menu>Next »</a>";
					}
					
		 echo "</td></tr>";		 
*/
?>					

					</table>
					<div><img src="images/spacer.gif" width="1" height="14" border="0" alt=""></div>
					</td>
					<td style="background: url(images/c_right.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
				</tr>
				<tr>
					<td><img src="images/c4.gif" width="5" height="5" border="0" alt=""></td>
					<td style="background: url(images/c_bot.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
					<td><img src="images/c3.gif" width="5" height="5" border="0" alt=""></td>
				</tr>
			</table>	  
	</tr>
</table>


<div><img src="images/spacer.gif" width="1" height="9" border="0" alt=""></div>
<table border="0" cellpadding="0" cellspacing="0" style="background: #767F82" width="1147" align="center">
	<tr>
		
		<td><img src="images/bot_left.gif" width="3" height="7" border="0" alt=""></td>
		<td align="right"><img src="images/bot_right.gif" width="4" height="7" border="0" alt=""></td>
	</tr>
</table>
<div><img src="images/spacer.gif" width="1" height="6" border="0" alt=""></div>

<table border="0" cellpadding="0" cellspacing="0" width="647" align="center">
	<tr>
		<td>&nbsp;</td>
		<td align="Center" valign="top"><div class="top11">Copyright © 2010 WeGo <b></b><br>
		</div></td>
	</tr>
</table>
<div><img src="images/spacer.gif" width="1" height="42" border="0" alt=""></div>
<!-- Start of StatCounter Code -->
<script type="text/javascript" language="javascript">
var sc_project=1952940; 
var sc_invisible=1; 
var sc_partition=17; 
var sc_security="fa1db912"; 
</script>

<script type="text/javascript" language="javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><a href="http://www.statcounter.com/" target="_blank"><img  src="http://c18.statcounter.com/counter.php?sc_project=1952940&amp;java=0&amp;security=fa1db912&amp;invisible=1" alt="hit counter" border="0"></a> </noscript>
<!-- End of StatCounter Code -->
</body>
</html>