var slideIndex = 1;
showSlides();

function showSlides() {
	var i;
	
	// Slides is array of objects/elements which class==images
	var slides = document.getElementsByClassName("images");
	
	// in our case, we have 3 div elem (since we have 3 images to show)
	for(i = 0; i < slides.length; i++) {
		//hide all images
		slides[i].style.display = "none";
	}
	
	// if it is the last image, we go back to image 0
	if(slideIndex == slides.length) {
		slideIndex = 0;
	}
	
	//show element in slides[slideIndex]
	slides[slideIndex].style.display = "block";
	
	// move to next element in slide array
	slideIndex++;
	
	// run this fuction every 8 seconds
	setTimeout(showSlides, 8000);
}