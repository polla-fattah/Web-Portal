
		
		captionText =9

		thisImg = 0
		imgCt = captionText
		
		function newSlide(direction) {
			if (document.images) {
				thisImg = thisImg + direction
				if (thisImg < 0) {
					thisImg = imgCt-1
				}
				if (thisImg == imgCt) {
					thisImg = 0
				}
				document.slideshow.src = "web_files/slide/slideImg" + thisImg + ".jpg"
			
			}
		}

