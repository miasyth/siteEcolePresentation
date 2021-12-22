let carrousel = id => {
    let x =document.getElementById(`slideshow${id}`).getElementsByClassName("mySlides");

    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideIndex[id]++;
    if (slideIndex[id] > x.length) {slideIndex[id] = 1}
    x[slideIndex[id]-1].style.display = "block";
}

let stopCarrousel = id => {
    clearInterval(timer[id]);
}

let resumeCarrousel = id => {
    setTimeout(function() {carrousel(id)}, 1000);// Resume after 1 second 
    setTimeout(function() {timer[id] = setInterval(function() {carrousel(id)}, 3000)}, 1000);// Change image every 3 seconds
}

let slideIndex=[];
let timer=[];

if(document.getElementsByClassName("slideshow-container")){
    let carrousels=Array.from(document.getElementsByClassName("slideshow-container"));

    carrousels.forEach( (_, id) => {
        slideIndex[id]=0;
        carrousel(id);
        timer[id] = setInterval(function() {carrousel(id)}, 3000);// Change image every 3 seconds
    });
}