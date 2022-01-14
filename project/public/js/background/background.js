const today = new Date();
const date = {jour:today.getDate(),mois:(today.getMonth()+1)};
const spring = {jour:20,mois:3};
const summer = {jour:21,mois:6};
const autumn = {jour:23,mois:9};
const winter = {jour:21,mois:12};

if(date.jour>=spring.jour && date.mois==spring.mois || date.mois>spring.mois && date.mois<summer.mois || date.jour<summer.jour && date.mois==summer.mois){
    //printemps
    document.getElementById(`container`).style.backgroundImage = "url('img/Fond/Printemps.jpg')";
} else if(date.jour>=summer.jour && date.mois==summer.mois || date.mois>summer.mois && date.mois<autumn.mois || date.jour<autumn.jour && date.mois==autumn.mois){
    //ete
    document.getElementById(`container`).style.backgroundImage = "url('img/Fond/Ete.jpg')";
} else if(date.jour>=autumn.jour && date.mois==autumn.mois || date.mois>autumn.mois && date.mois<winter.mois || date.jour<winter.jour && date.mois==winter.mois){
    //automne
    document.getElementById(`container`).style.backgroundImage = "url('img/Fond/Automne.jpg')";
} else {
    //hiver
    document.getElementById(`container`).style.backgroundImage = "url('img/Fond/Hiver1.jpg')";
}
