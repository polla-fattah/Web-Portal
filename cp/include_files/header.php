<tr><td height=22 background=web_files/top_hd.jpg></td></tr>

<tr><td height=93 background=web_files/center_hd.jpg valign=top align=center>
<table cellpadding=0 cellspacing=0 border=0 width=948 height=93>
<tr><td  background=sample_hd.jpg align=center valign=top>
<table cellpadding=0 cellspacing=0 border=0 width=100% height=100%>
<tr>
<td width=358 height=93>
<table cellpadding=0 cellspacing=0 border=0 width=100% height=100%>
<tr><td height=62></td></tr>

<tr><td valign=top height=31 align=left >
<table cellpadding=0 cellspacing=0 border=0 width=228>
<tr><td bgcolor=#FF3300 height=31>

		<script language="JavaScript1.2">

/***********************************************
* Flexi Slideshow- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var variableslide=new Array()

//variableslide[x]=["path to image", "OPTIONAL link for image", "OPTIONAL text description (supports HTML tags)"]

variableslide[0]=['slidephoto/b1.jpg', '', '']
variableslide[1]=['slidephoto/b2.jpg', '', '']
variableslide[2]=['slidephoto/b3.jpg', '', '']

//configure the below 3 variables to set the dimension/background color of the slideshow

var slidewidth='228' //set to width of LARGEST image in your slideshow
var slideheight='31' //set to height of LARGEST iamge in your slideshow, plus any text description
var slidebgcolor='#acb4b2'

//configure the below variable to determine the delay between image rotations (in miliseconds)
var slidedelay=3000

////Do not edit pass this line////////////////

var ie=document.all
var dom=document.getElementById

for (i=0;i<variableslide.length;i++){
var cacheimage=new Image()
cacheimage.src=variableslide[i][0]
}

var currentslide=0

function rotateimages(){
contentcontainer='<center>'
if (variableslide[currentslide][1]!="")
contentcontainer+='<a href="'+variableslide[currentslide][1]+'">'
contentcontainer+='<img src="'+variableslide[currentslide][0]+'" border="0" vspace="0">'
if (variableslide[currentslide][1]!="")
contentcontainer+='</a>'
contentcontainer+='</center>'
if (variableslide[currentslide][2]!="")
contentcontainer+=variableslide[currentslide][2]

if (document.layers){
crossrotateobj.document.write(contentcontainer)
crossrotateobj.document.close()
}
else if (ie||dom)
crossrotateobj.innerHTML=contentcontainer
if (currentslide==variableslide.length-1) currentslide=0
else currentslide++
setTimeout("rotateimages()",slidedelay)
}

if (ie||dom)
document.write('<div id="slidedom" style="width:'+slidewidth+';height:'+slideheight+'; background-color:'+slidebgcolor+'"></div>')

function start_slider(){
crossrotateobj=dom? document.getElementById("slidedom") : ie? document.all.slidedom : document.slidensmain.document.slidenssub
if (document.layers)
document.slidensmain.visibility="show"
rotateimages()
}

if (ie||dom)
start_slider()
else if (document.layers)
window.onload=start_slider

</script>

<ilayer id="slidensmain" width=&{slidewidth}; height=&{slideheight}; bgColor=&{slidebgcolor}; visibility=hide><layer id="slidenssub" width=&{slidewidth}; left=0 top=0></layer></ilayer>


</td></tr>
</table>
</td></tr>
</table>
</td>

<td width=320 height=93 bgcolor=#afb8b5>

<script language="JavaScript">


images = new Array(16);

images[0] = "<a href = 'http://7netlayers.com'><img src='img2/1.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[1] = "<a href = 'http://7netlayers.com'><img src='img2/2.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[2] = "<a href = 'http://7netlayers.com'><img src='img2/3.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[3] = "<a href = 'http://7netlayers.com'><img src='img2/4.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[4] = "<a href = 'http://7netlayers.com'><img src='img2/5.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[5] = "<a href = 'http://7netlayers.com'><img src='img2/6.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[6] = "<a href = 'http://7netlayers.com'><img src='img2/7.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[7] = "<a href = 'http://7netlayers.com'><img src='img2/8.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[8] = "<a href = 'http://7netlayers.com'><img src='img2/9.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[9] = "<a href = 'http://7netlayers.com'><img src='img2/10.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[10] = "<a href = 'http://7netlayers.com'><img src='img2/11.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[11] = "<a href = 'http://7netlayers.com'><img src='img2/12.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[12] = "<a href = 'http://7netlayers.com'><img src='img2/13.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[13] = "<a href = 'http://7netlayers.com'><img src='img2/14.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[14] = "<a href = 'http://7netlayers.com'><img src='img2/15.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";

images[15] = "<a href = 'http://7netlayers.com'><img src='img2/16.jpg' alt='Whenever.. Wherever..Wimax' width=320 height=93 border=0></a>";


index = Math.floor(Math.random() * images.length);

document.write(images[index]);

</script><br>


</td>

<td width=325 height=93 valign=top >
<table cellpadding=0 cellspacing=0 border=0  width=100% >
<tr><td height=8></td></tr>
<tr>
<td>&nbsp;</td>
<td width=73 height=20 valign=center align=center >English</td>
<td width=7 height=20 valign=center ></td>
<td width=73 height=20 valign=center align=center ><a class=lang href=#><font face=arial style='FONT-WEIGHT: bold;'>&#1705;&#1608;&#1585;&#1583;&#1740;</font></a></td>
<td width=7 height=20 valign=center ></td>
<td width=73 height=20 valign=center align=center ><a class=lang href=ar/><font face=arial style='FONT-WEIGHT: bold;'>&#1593;&#1585;&#1576;&#1740;</font></a></td>
<td width=27 height=20 valign=center ></td>
</tr>
</table>
</td>

</tr>
</table>
</td></tr>
</table>
</td></tr>

<tr><td  height=39 background=web_files/bottom_hd.jpg align=center>
<table cellpadding=0 cellspacing=0 border=0 width=948 height=39>
<tr>
<td  background=web_files/full_bottom_bg.jpg align=center> </td>
</tr>
</table>
</td></tr>