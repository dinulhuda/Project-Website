//get login box form
var modal = document.getElementById('login');

//close when user click out of login box form
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//slideshow
var slide1 = document.getElementById("slide1");
slide1.currentSlideIndex = 1;
showSlides(slide1.currentSlideIndex, slide1);

var slide2 = document.getElementById("slide2");
slide2.currentSlideIndex = 1;
showSlides(slide2.currentSlideIndex, slide2);

var slide3 = document.getElementById("slide3");
slide3.currentSlideIndex = 1;
showSlides(slide3.currentSlideIndex, slide3);

//slide control next/prev
function plusSlides(n, slide) {
    showSlides(slide.currentSlideIndex += n, slide);
}
  
function currentSlide(n, slide) {
    showSlides(slide.currentSlideIndex = n, slide);
}

function showSlides(n, slide) {

    var i;
    var slides = slide.getElementsByClassName("mySlides");

    if (n > slides.length) {slide.currentSlideIndex = 1}    
    if (n < 1) {slide.currentSlideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    
    slides[slide.currentSlideIndex-1].style.display = "block";  
    
}