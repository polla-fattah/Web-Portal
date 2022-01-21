
var slideShowSpeed = 5000

// Duration of crossfade (seconds)
var crossFadeDuration = 3

// Specify the image files
var Pic = new Array() // don't touch this
// to add more images, just continue
// the pattern, adding to the array below

Pic[0] = 'web_files/slide/1.jpg'
Pic[1] = 'web_files/slide/2.jpg'
Pic[2] = 'web_files/slide/3.jpg'
Pic[3] = 'web_files/slide/4.jpg'
Pic[4] = 'web_files/slide/5.jpg'
Pic[5] = 'web_files/slide/6.jpg'
Pic[6] = 'web_files/slide/7.jpg'
Pic[7] = 'web_files/slide/8.jpg'
Pic[8] = 'web_files/slide/9.jpg'
// =======================================
// do not edit anything below this line
// =======================================

var t
var j = 0
var p = Pic.length

var preLoad = new Array()
for (i = 0; i < p; i++){
   preLoad[i] = new Image()
   preLoad[i].src = Pic[i]
}

function runSlideShow(){
   if (document.all){
      document.images.SlideShow.style.filter="blendTrans(duration=2)"
      document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)"
      document.images.SlideShow.filters.blendTrans.Apply()      
   }
   document.images.SlideShow.src = preLoad[j].src
   if (document.all){
      document.images.SlideShow.filters.blendTrans.Play()
   }
   j = j + 1
   if (j > (p-1)) j=0
   t = setTimeout('runSlideShow()', slideShowSpeed)
}

