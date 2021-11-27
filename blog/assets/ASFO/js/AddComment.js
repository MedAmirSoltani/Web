function NowDate() {
    var today = new Date();
    var DateNow = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
    document.getElementById("Date").value = DateNow;
}
