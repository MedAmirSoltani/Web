function submitForm() {
    if (confirm("Sure you wanna Submit the form?")) {
        return true;
    }
    else {
        return false;
    }
}

function startsWithCapital(word) {
    if (word.charAt(0) === word.charAt(0).toUpperCase()) {
        return true;
    }
    else {
        return false;
    }
}
function allLetter(word) {
    var letters = /^[A-Za-z]+$/;
    if (word.match(letters)) {
        return true;
    }
    else {
        return false;
    }
}

function NowDate() {
    var today = new Date();
    var DateNow = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
    document.getElementById("Date").value = DateNow;
}

window.onload=NowDate;

function CheckTitle() {
    var Title = document.getElementById("Title").value;

    if (Title === "") {
        alert("Empty Title");

        return false;


    }
    else {
        if (allLetter(Title) === false) { alert("Title must be only LETTERS"); return false; } else {
            if (startsWithCapital(Title) === false) { alert("Title must start WITH CAPITAL LETTER"); return false; }
            else { if (Title.length < 3) { alert("Title too short "); return false; } else if (Title.length > 15) { alert("Title Too long"); return false; } else { return true; } }
        }

    }
}
function CheckPicture() {
    Picture = document.getElementById("Picture").files.length;
    if (Picture === 0) {
        alert("there is no picture");
        return false;

    } else {
        return true;

    }
}

function CheckDescription() {
    pargh = document.getElementById("Description").value;
    parlength = pargh.length;
    if (parlength > 50) {
        alert("Description is too long ");
        return false;

    } else if (parlength < 10) {
        alert("Description too short");
        return false;


    }
    else { return true; }
}

function CheckAddBlog() {

    console.log("FUNCTION KHIDMET");
    if (CheckTitle() === false) { console.log("kra function title"); return CheckTitle(); }
    else if (CheckPicture() === false) { console.log("kra function picture"); return CheckPicture(); }
    else if (CheckDescription() === false) { console.log("kra function description"); return CheckDescription(); }







}
