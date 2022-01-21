<SCRIPT language=JavaScript1.2>
var script_url = "http://www.awrosoft.com";
function infaction(f,a,module,id){
var reg = new RegExp("save");
if (reg.test(a)){
window.location=(script_url+"/"+f+".php?action="+a+"&m="+module+"&id="+id);
}else{
window.open(script_url+"/"+f+".php?action="+a+"&m="+module+"&id="+id, "print", "toolbar=no, scrollbars=yes, resizable=yes, width=750, height=450, top=50, left=50");
}
}
</SCRIPT>

<SCRIPT type=text/javascript>
startList = function() {
// code for IE
if(!document.body.currentStyle) return;
var subs = document.getElementsByName('submenu');
for(var i=0; i<subs.length; i++) {
var li = subs[i].parentNode;
if(li && li.lastChild.style) {
li.onmouseover = function() {
this.lastChild.style.visibility = 'visible';
}
li.onmouseout = function() {
this.lastChild.style.visibility = 'hidden';
}}}}
window.onload=startList;
</SCRIPT>

<td width=200  valign=top>
<table cellpadding=0 cellspacing=0 border=0 width=100%>

<!-- Block -->
<tr><td>

<table border=0 width=200 cellpadding=0 cellspacing=0 bgcolor=#00aeef>

<tr><td background=web_files/blue_menu_top_bg.jpg  height=10></td></tr>
<tr><td>




<DIV id=menu >
            <UL id=menuList>
              
             <LI><A name=submenu href="index.php"><IMG src="web_files/arroww3.gif" border=0> Home</A></LI>
          


<?php 



			
							$news="SELECT * FROM mmenu  order by seq asc ;";
							$newss=mysql_query($news) or die(mysql_error());			
							$nr = mysql_num_rows($newss); //Number of rows found with LIMIT in action	


		
				
if (mysql_num_rows($newss) > 0) 
{
	
while($newsr= mysql_fetch_array($newss))
{


							$sm="SELECT * FROM smenu where rid='$newsr[id]'  order by seq asc ;";
							$sms=mysql_query($sm) or die(mysql_error());
							if (mysql_num_rows($sms) > 0) 
							{
								if($newsr['name']=='Wego plans')
             					print"<LI><A name=submenu href='plans.php'><IMG src='web_files/arroww3.gif' border=0> Wego plans</A></LI>";
								else
								print"<LI><A name=submenu  href='#'><IMG src='web_files/arroww3.gif' border=0> $newsr[name]</A>";
								
								print"<UL>";
								while($smr= mysql_fetch_array($sms))
								{
									print"<LI><A   href='site.php?menu=sub&id=$smr[id]'><IMG src='web_files/arroww3.gif' border=0> $smr[name]</A>";
								}
							
							print"</UL></LI>";
							}
							else
							{
							
							if($newsr['name']=='Wego plans')
							print"<LI><A  href='plans.php'><IMG src='web_files/arroww3.gif' border=0> Wego plans</A></LI>";
							else
							print"<LI><A  href='site.php?menu=main&id=$newsr[id]'><IMG src='web_files/arroww3.gif' border=0> $newsr[name]</A></LI>";
							}
										
	
	
}
}


	  	
?>	


              

              
              </UL></DIV>
</td></tr>
<tr><td bgcolor=#00aeef height=2></td></tr>

<tr><td background=web_files/blue_menu_bottom_bg.jpg height=10  bgcolor=00aeef ></td></tr>




</table>


</td></tr>
<!-- Block -->

<tr><td height=20></td></tr>

<!-- Block -->
<tr><td align=center>
<a target=_blank href='http://www.facebook.com/search/?init=srp&sfxp=&q=avan+sardary&o=2048&ne=67109273&=Iraq&ed=&=School&wk=&=Workplace#/group.php?gid=147962648157&ref=ts'  title='Join our facebook page'>
<img src=web_files/facebook-logo.jpg border=0 width=150 height=45 alt='Join us on face book'></a>
</td></tr>
<!-- Block -->

<!--
<tr><td height=20></td></tr>


<tr><td align=center>
<a href='voting.php' onclick="NewWindow(this.href,'mywin','450','330','yes','center');return false" onfocus='this.blur()' title='Item Record Properties'>
<img src=web_files/vote.jpg border=0 width=167 height=53 alt='Join us on face book'></a>
</td></tr>
<!-- Block -->

</table>
</td>