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

function CheckTitle() {
    var Title = document.getElementById("Title").value;
    var warn = document.getElementById("wrtitle");
    if (Title === "") {
        warn.innerHTML = '<div class="alert alert-warning alert-dismissible d-flex align-items-center fade show"><i class="bi-exclamation-triangle-fill"></i><strong class="mx-2">Warning!</strong> There was a problem with your network connection.<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';

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


    if (CheckTitle() === false) { return CheckTitle(); }
    else if (CheckPicture() === false) { return CheckPicture(); }
    else if (CheckDescription() === false) { return CheckDescription(); }






}
