const copy = _ => {
    /* Get the text field */
    let copyText = document.getElementById("mailAddress").innerText;

    copyText=copyText.replace(/Copier/g, "");
  
     /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText);
}

const mail = _ => {

    const name=document.getElementById("Nom").value;
    const mail=document.getElementById("Email").value;
    const subject=document.getElementById("Objet").value;
    let body=document.getElementById("textarea").value;

    body=body.replace(/\n/g, "%0A");

    body+="%0A%0A"+
            "--%0A%0A"+
            name+"%0A"+
            mail;

    let link= "mailto:lapresentation@orange.fr?"+
                "subject="+subject+
                "&body="+body;
    

    window.open(link, '_blank');
}