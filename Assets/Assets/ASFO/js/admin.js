let nav = document.getElementById("forum");
let nav1 = document.getElementById("forumar");
nav.style.display = "none";
nav1.style.display = "none";

function affich() {

   if (nav.style.display == "none" && nav1.style.display == "none") {
      nav.style.display = "block";
      nav1.style.display = "block";
   }
   else {
      nav.style.display = "none";
      nav1.style.display = "none";
   }
}



