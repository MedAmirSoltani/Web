function NowDate() {
    var today = new Date();
    var DateNow = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
    Dates = document.querySelectorAll("[id='Date']");
    Dates.forEach(element => { element.value = DateNow; });
    /*  for (var i = 0; i < Dates.length; i++)
          Dates[i].value = DateNow;*/


}

function Verify() {
    let comment = document.getElementById("Comment").value;
    if (comment == NULL) {
        return false;

    } else {
        return true
    }
}