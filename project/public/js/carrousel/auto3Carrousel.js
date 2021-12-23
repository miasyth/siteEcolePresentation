let start3Carrousel = id => {
    let x =document.getElementById(`3slideshow${id}`).getElementsByClassName("mySlides");

    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    
    x[slideIndex3[id][0]-1].style.display = "block";
    slideIndex3[id][0]+=3;
    if (slideIndex3[id][0] > x.length) {slideIndex3[id][0] -= x.length}
    
    x[slideIndex3[id][1]-1].style.display = "block";
    slideIndex3[id][1]+=3;
    if (slideIndex3[id][1] > x.length) {slideIndex3[id][1] -= x.length}
    
    x[slideIndex3[id][2]-1].style.display = "block";
    slideIndex3[id][2]+=3;
    if (slideIndex3[id][2] > x.length) {slideIndex3[id][2] -= x.length}
}

let stop3Carrousel = id => {
    clearInterval(timer3[id]);
    indicator3[id]=0;
}

let resume3Carrousel = id => {
    if(!indicator3[id]){ // si le carrousel ne tourne pas
        timer3[id] = setInterval(function() { // Changes image every 3 seconds
            start3Carrousel(id);
        }, 3000)
        indicator3[id]=1;
    }
}

let slideIndex3=[[]];
let timer3=[];
let indicator3=[];

if(document.getElementsByClassName("slideshow-container3")){
    let carrousels=Array.from(document.getElementsByClassName("slideshow-container3"));

    carrousels.forEach( (carrousel, id) => {
        let slides3=[];
        slideIndex3[id]=[1,2,3];
        indicator3[id]=1;
        carrousel.id=`3slideshow${id}`
        start3Carrousel(id); // Loads first carrousel
        timer3[id] = setInterval(function() { // Changes image every 3 seconds
            start3Carrousel(id)
        }, 3000);

        slides3= carrousel.getElementsByClassName("image_3carrousel");

        console.log(slides3);
        for(let i=0 ; i<slides3.length ; i++){
            slides3[i].attributes.onmouseover.nodeValue=`stop3Carrousel(${id})`;
            slides3[i].attributes.onmouseout.nodeValue=`resume3Carrousel(${id})`;
        }

    });
}