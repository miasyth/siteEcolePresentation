let startCarrousel = id => {
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
    indicator[id]=0;
}

let resumeCarrousel = id => {
    if(!indicator[id]){ // si le carrousel ne tourne pas
        timer[id] = setInterval(function() { // Changes l'image toutes les 3 seconds
            startCarrousel(id);
            indicator[id]=1;
        }, 3000);
    }
}

let slideIndex=[];
let timer=[];
let indicator=[];

if (document.getElementsByClassName("slideshow-container")){
    let carrousels=Array.from(document.getElementsByClassName("slideshow-container"));

    carrousels.forEach( (carrousel, id) => {
        let slides=[];
        slideIndex[id]=0;
        indicator[id]=1;
        carrousel.id=`slideshow${id}`
        startCarrousel(id); // Affiches les 3 premieres images
        timer[id] = setInterval(function() { // Changes l'image toutes les 3 seconds
            startCarrousel(id);
        }, 3000);

        slides= carrousel.getElementsByClassName("image_carrousel");

        for(let i=0 ; i<slides.length ; i++){
            slides[i].attributes.onmouseover.nodeValue=`stopCarrousel(${id})`;
            slides[i].attributes.onmouseout.nodeValue=`resumeCarrousel(${id})`;
        }
    });
}