<td width=200  valign=top>
<table cellpadding=0 cellspacing=0 border=0 width=100%>

<tr><td>
<table cellpadding=0 cellspacing=0 border=0 width=100%>

<!-- Block -->
<tr><td background=web_files/gray_menu_top_bg.jpg  height=10></td></tr>
<tr><td background=web_files/gray_menu_middle_bg.jpg valign=top style='padding-left:10px; padding-right:10px; padding-top:5px; padding-bottom:10px;'>
<table cellpadding=0 cellspacing=0 border=0 width=100%>
<tr><td height=25 valign=top class=label align=left><img src=web_files/orange-arrow-button.gif align=absmiddle> News & Events </font></td></tr>
<tr><td height=2 bgcolor=e0e0e0></td></tr>
<tr><td height=8></td></tr>


<?php 



			
							$news="SELECT * FROM news where nshow=1 and f_language='English' and n_type='Event'  order by id desc Limit 1;";
							$newss=mysql_query($news) or die(mysql_error());			
							$nr = mysql_num_rows($newss); //Number of rows found with LIMIT in action	


		
				
if (mysql_num_rows($newss) > 0) 
{
	
while($newsr= mysql_fetch_array($newss))
{
	  	
	  	
	  	
print"<tr><td style='padding-bottom:5px;' align=left><a class=news href='details.php?id=$newsr[id]&section=news'>$newsr[title]</a></td></tr>";


$subcontent=substr($newsr['content'], 0, 100);
//print"<tr><td style='padding-bottom:5px;'><p align=justify>$subcontent</p></td></tr>";
//print"<tr><td align=right><img src=web_files/arrow-.gif> <a class=details  href='details.php?id=$newsr[id]&section=news'> Details</a></td></tr>";
}
}


	  	
?>	  	

<tr><td height=20></td></tr>

<tr><td height=25 valign=top class=label align=left><img src=web_files/orange-arrow-button.gif align=absmiddle> Our Promotion</font></td></tr>
<tr><td height=2 bgcolor=e0e0e0></td></tr>
<tr><td height=8></td></tr>   		



<?php 



			
							$news="SELECT * FROM news where nshow=1 and f_language='English' and n_type='Promotion'  order by id desc Limit 1;";
							$newss=mysql_query($news) or die(mysql_error());			
							$nr = mysql_num_rows($newss); //Number of rows found with LIMIT in action	


		
				
if (mysql_num_rows($newss) > 0) 
{
	
while($newsr= mysql_fetch_array($newss))
{
	  	
$subtitle=substr($newsr['title'], 0, 100);	  	
$subtitle.='....';	  	
print"<tr><td style='padding-bottom:5px;' align=left><a class=news href='details.php?id=$newsr[id]&section=news'>$subtitle</a></td></tr>";


$subcontent=substr($newsr['content'], 0, 100);
//print"<tr><td style='padding-bottom:5px;'><p align=justify>$subcontent</p></td></tr>";
//print"<tr><td align=right><img src=web_files/arrow-.gif> <a class=details  href='details.php?id=$newsr[id]&section=news'> Details</a></td></tr>";
}
}


	  	
?>			
</table>
</td></tr>
<tr><td background=web_files/gray_menu_bottom_bg.jpg height=10></td></tr>
<!-- Block -->


<tr><td height=20 ></td></tr>

<!-- Block -->
<tr><td align=center>
<a href='feedback.php' onclick="NewWindow(this.href,'mywin','550','430','yes','center');return false" onfocus='this.blur()' title='Feedback'>
<img src=web_files/feedback.jpg border=0 width=194 height=100 alt='Send us your feedback'></a>
</td></tr>
<!-- Block -->


</table>
</td></tr>







</table>
</td>