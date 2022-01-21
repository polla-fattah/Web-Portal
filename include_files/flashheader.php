<style type="text/css">

.flashclass{ /*sample css class added to image slideshow container*/
width: 893px; /*a width should be defined for transition to work*/
border: 0px solid orange;
padding: 0px;
}

.flashclass img{
border-width: 0;
}

</style>

<script type="text/javascript" src="flash/transitionshow.js"></script>



<script type="text/javascript">

var flashyshow=new flashyslideshow({ //create instance of slideshow
	wrapperid: "myslideshow", //unique id for this slideshow
	wrapperclass: "flashclass", //desired css class for this slideshow
	imagearray: [
	
		['flash/s1.jpg', '#', '', ''],
		['flash/s3.jpg', '#', '', ''],
		['flash/s2.jpg', '#', '', ''],
		['flash/s4.jpg', '#', '', '']
	],
	pause: 8000, //pause between content change (millisec)
	transduration: 2000 //duration of transition (affects only ie users)
})

</script>

