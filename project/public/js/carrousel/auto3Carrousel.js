let carrousel3 = id => {
    let x =document.getElementById(`3slideshow${id}`).getElementsByClassName("mySlides");

    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideIndex3[id][0]+=3;
    if (slideIndex3[id][0] > x.length) {slideIndex3[id][0] -= x.length}
    x[slideIndex3[id][0]-1].style.display = "block";
    slideIndex3[id][1]+=3;
    if (slideIndex3[id][1] > x.length) {slideIndex3[id][1] -= x.length}
    x[slideIndex3[id][1]-1].style.display = "block";
    slideIndex3[id][2]+=3;
    if (slideIndex3[id][2] > x.length) {slideIndex3[id][2] -= x.length}
    x[slideIndex3[id][2]-1].style.display = "block";
}

let stop3Carrousel = id => {
    clearInterval(timer3[id]);
}

let resume3Carrousel = id => {
    setTimeout(function() {carrousel3(id)}, 1000);// Resume after 1 second 
    setTimeout(function() {timer3[id] = setInterval(function() {carrousel3(id)}, 3000)}, 1000);// Change image every 3 seconds
}

let slideIndex3=[[]];
let timer3=[];

if(document.getElementsByClassName("slideshow-container3")){
    let carrousels=Array.from(document.getElementsByClassName("slideshow-container3"));

    carrousels.forEach( (_, id) => {
        slideIndex3[id]=[0,1,2];
        carrousel3(id);
        timer3[id] = setInterval(function() {carrousel3(id)}, 3000);// Change image every 3 seconds
    });
}