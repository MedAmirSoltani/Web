var date = new Date();
var year = date.getFullYear();
var month = date.getMonth()+1;
var todayDate = String(date.getDate()).padStart(2,'0');
var datePattern = year + '-' + month + '-' + todayDate;
document.getElementById("date-picker").value = datePattern;

function TDate() {
    var UserDate = document.getElementById("userdate").value;
    var ToDate = new Date();

    if (new Date(UserDate).getTime() >= ToDate.getTime()) {
          alert("The Date must be less or Equal to today date");
          return false;
     }
    return true;
}
mobiscroll.datepicker('#datepicker', {
    controls: ['date'],
    min: '2021-09-13',
    max: '2022-06-06'
});