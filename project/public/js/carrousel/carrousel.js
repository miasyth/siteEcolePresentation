let slideIndex = 0;
let timer;

let carrousel = _ => {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    timer = setTimeout(carrousel, 3000); // Change image every 3 seconds
}

let stopCarrousel = _ => {
    clearTimeout(timer);
}

let resumeCarrousel = _ => {
    timer = setTimeout(carrousel, 1000);
}

if(document.getElementsByClassName("mySlides")){
    carrousel();
}
