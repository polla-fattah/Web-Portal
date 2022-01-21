
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript">
<!--
function checkInput()
{do
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
					<td width="893" align="center" height="100"><?php include "include_files/flashheader.php"; ?> </td>
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
					<div class="mw"><a href="http://www.mywego.com" class="aw" target="_blank">www.mywego.com</a></div></td>
					
					
					
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
  							    include "include_files/connect.php";
										
      							$result = mysql_query("select * from movies_categories",$db);
										$numofrows= mysql_num_rows($result);
      							$c=0;
										while($row = mysql_fetch_array($result))
        						{
										 $c=$c+1;
										 echo '<div class="lmenu"><img src="images/ico2.gif" width="7" height="5" border="0" alt="" hspace="6"><a href=index.php?subcat='.$row['category'].' class="top11">'.$row['category'].' Movies'.'</a></div>';
										 if($c<$numofrows)
										 echo	'<div><img src="images/line_h2.gif" width="186" height="1" border="0" alt=""></div>';
										 
										 
         						
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
			
	
	
	
				
			
	<!--		<div><img src="images/spacer.gif" width="1" height="7" border="0" alt=""></div>
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td><img src="images/c1.gif" width="5" height="5" border="0" alt=""></td>
					<td style="background: url(images/c_top.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
					<td><img src="images/c2.gif" width="5" height="5" border="0" alt=""></td>
				</tr>
				<tr>
					<td style="background: url(images/c_left.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
					<td width="194" align="center">
					
					<a href="#"><img src="images/so_img.jpg" width="116" height="113" border="0" alt=""></a>
					<div style="padding: 9px 0 4px 0"><img src="images/so.gif" width="137" height="15" border="0" alt=""></div>
					<div class="so"><b>Morbi nunc odi gravida.</b></div>
					
					</td>
					<td style="background: url(images/c_right.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
				</tr>
				<tr>
					<td><img src="images/c4.gif" width="5" height="5" border="0" alt=""></td>
					<td style="background: url(images/c_bot.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
					<td><img src="images/c3.gif" width="5" height="5" border="0" alt=""></td>
				</tr>
			</table>
-->		</td>
		<td><img src="images/spacer.gif" width="4" height="1" border="0" alt=""></td>
		<td valign="top">
			
			<table border="0" cellpadding="0" cellspacing="0"  style="background: url(images/left_bg.gif)">
				<tr>
					<td><img src="images/left_left.gif" width="21" height="29" border="0" alt=""></td>
					<td><img src="images/spacer.gif" width="7" height="1" border="0" alt=""></td>
					<td width="903"><div class="lb">Download Movie</div> 
					<div class="lw">Download Movie</div></td>
					<td><img src="images/left_right.gif" width="6" height="29" border="0" alt=""></td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td style="background: url(images/c_left.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
					<td width="909" align="center">
					<div><img src="images/spacer.gif" width="1" height="12" border="0" alt=""></div>
					<table border="0" cellpadding="0" cellspacing="0" width="926.5">
<?php


include "include_files/connect.php";
include "include_files/paths.php";
				$q="SELECT *  FROM movies WHERE id = $_GET[id];";			
				$rs=mysql_query($q,$db) or die(mysql_error());			

if (mysql_num_rows($rs) > 0) 
{
$r = mysql_fetch_array($rs);


// <!-- A complete Row with spaces !-->					
					
					 echo"	<tr>";
				
//	<!-- A TD with space(complete) --> 						
						echo '<td  rowspan="2" width=300 valign="top" >';
								echo '<table border="0" cellpadding="0" cellspacing="0" >';
									echo '<tr>';
									  if(trim($r['image_path'])!="")
										 echo '<td  rowspan="3" width="161" align="center"><img src='.$moviescoverspath.$r['image_path'].' width="113" height="140" border="0" alt=""></td>';
										else 
										  echo '<td  rowspan="3" width="161" align="center"><img src='.$moviescoverspath.'xxxmoviexxx.jpg' . ' width="113" height="140" border="0" alt=""></td>';
  										echo '<td width="120" valign="top"  align="left" height="55">';
  											echo '<div class="item_name" style="padding-top: 0px" >'. $r['name'] .'</div>';
  										echo '</td>';
									echo '</tr>';
									echo '<tr></tr>';
									echo '<tr>';
										echo '<td valign="bottom" >';
											echo '<div class="item_desc"><span class="top11">Info: </span>'.$r['description'].'</div>';
										 	echo '<div class="item_Price" style="padding-bottom: 0px"><span class="top11">Size: </span>'.$r['size'].'</div>';
											echo '<div class="item_Price" style="padding-bottom: 0px"><span class="top11">Type: </span>'.$r['type'].'</div>';
											echo '<div class="item_Price" style="padding-bottom: 0px"><span class="top11">Software: </span>'.$r['Required_software'].'</div>';
										echo '</td>';
									echo '</tr>';
							//
									
									    echo '<tr>';
									echo '<td colspan="2">';
											echo '<div class="summary" style="padding-bottom: 0px; padding-left: 23px; padding-top:10px"><span class="top11">Summary: </span>'.$r['summary'].'</div>';
									echo '</td>';
									echo '</tr>';		 
									echo '<tr>';
										echo '<td>';
										  echo '<div style="padding-bottom: 0px; padding-left: 23px; padding-top:10px"><a href=downcount.php?path=fuploads/movies/'.$r['movie_path'].' target="_self"><img src="images/but_buy.gif" width="55" height="23" border="0" alt=""></a></div>';
										echo '</td>';
									echo '</tr>';		
							//	
								echo '</table>';
              						
							echo '</td>';
						
						
	      	
					 echo ' </tr>';
					 echo ' <tr></tr>';
					
		  echo '<tr></tr>';
 
}
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