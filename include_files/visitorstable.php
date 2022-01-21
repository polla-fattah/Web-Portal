<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
</html>
<?php
include "onlinevisitors.php";
include "totalvisitors.php";
include "totaldownloads.php";

		 print '<table><tr><td height="20"></td></tr></table>';

		print '	<table border="0" cellpadding="0" cellspacing="0"  style="background: url(images/left_bg.gif)">';
			print '	<tr>';
					print '<td><img src="images/left_left.gif" width="21" height="29" border="0" alt=""></td>';
					print '<td><img src="images/spacer.gif" width="7" height="1" border="0" alt=""></td>';
					print '<td width="170" height="29"><div class="lb" >statistics</div>'; 
					print '<div class="lw">statistics</div></td>';
					print '<td><img src="images/left_right.gif" width="6" height="29" border="0" alt=""></td>';
				print '</tr>';
		print '	</table>';
			print '<table border="0" cellpadding="0" cellspacing="0">';
			   	print '<tr>';
					print '<td style="background: url(images/c_left.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
					print '<td width="194" align="center">';
						
						print '<table border="0" cellpadding="0" cellspacing="0">';
						  print '<tr>';
  							 print '<td>';
  							 		 	print '<div class="lmenu">online:<span class="sts"> '.$visitors_online .'</span></div>';
  										print '<div><img src="images/line_h2.gif" width="186" height="1" border="0" alt=""></div>';
											print '<div class="lmenu">total: <span class="sts">'. $count.'</span></div> '; // total visitors count
											print '<div><img src="images/line_h2.gif" width="186" height="1" border="0" alt=""></div>';
											print '<div class="lmenu">downloads:<span class="sts">'.$totaldownloads[0].'</span> </div>'; // total downloads count
  						
  						
							 print ' </td>';
							print '</tr>';
						print '</table>';
					print '</td>';
			   		print '<td style="background: url(images/c_right.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
			   	print '</tr>';
				print '<tr>';
					print '<td><img src="images/c4.gif" width="5" height="5" border="0" alt=""></td>';
					print '<td style="background: url(images/c_bot.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>';
					print '<td><img src="images/c3.gif" width="5" height="5" border="0" alt=""></td>';
				print '</tr>';
			print '</table>';

?>