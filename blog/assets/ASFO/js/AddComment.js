function NowDate() {
    var today = new Date();
    var DateNow = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
    document.getElementById("Date").value = DateNow;
}

function Verify(){
    let comment=document.getElementById("Comment").value;
    if (comment==NULL) {
        return false;
        
    } else {
        return true
    }
}