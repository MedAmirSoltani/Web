
function allLetter(word) {
    var letters = /^[A-Za-z]+$/;
    if (word.match(letters)) {
        return true;
    }
    else {
        return false;
    }
}
function verif(){
    let titre=document.getElementById("titre").value;
    if(document.getElementById("titre").value==false) {     
        alert("vide");  }

        if (allLetter(titre)===false) {
            alert("check your titlee");
    }
}
