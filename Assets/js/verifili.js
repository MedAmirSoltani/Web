function allLetter(word) {
    var letters = /^[A-Za-z]+$/;
    if (word.match(letters)) {
        return true;
    }
    else {
        return false;
    }
}

window.onload =function () {
    

        randomNum=Math.floor(Math.random() * 80000000);
        document.getElementById("ID_utilisateur").value = randomNum;
            test=document.getElementById("ID_utilisateur").value;
            
      }

function xx() {                        
    var selectedvalue = document.getElementById("role").value;
    if (selectedvalue == "Etudiant") {
        document.getElementById("classe").removeAttribute("hidden");
        document.getElementById("idmatiere").removeAttribute("name");
        }
    if (selectedvalue == "Prof") {
        document.getElementById("idmatiere").removeAttribute("hidden");
        document.getElementById("classe").removeAttribute("name");
       }
 }
    function getselectedvalue() {
        var test=true;
        
        if(test==true)
        {
        var name = document.getElementById("name").value;
        if (name ==false) {
            document.getElementById("frogot-name").style.display = "block";
            document.getElementById("frogot-name").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write a name</p>';
          test=false;
          return false;
        
            }
        
            else{
                document.getElementById("frogot-name").style.display = "none";
            }
           if (allLetter(name)===false) {
            document.getElementById("frogot-name").style.display = "block";
            document.getElementById("frogot-name").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">the name should be in letters</p>';
            test=false;
            return false;
    }else{
        document.getElementById("frogot-name").style.display = "none";
    }


    var first_name=document.getElementById("first_name").value;
  
 if(first_name==false) {
    document.getElementById("frogot-first-name").style.display = "block";
     document.getElementById("frogot-first-name").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write a first name</p>';
     test=false;}
     else{
        document.getElementById("frogot-first-name").style.display = "none";
    }
        

        if (allLetter(first_name)===false) {
            document.getElementById("frogot-first-name").style.display = "block";
            document.getElementById("frogot-first-name").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">the first name should be in letters</p>';
            test=false;
    }else{
        document.getElementById("frogot-first-name").style.display = "none";
    }

    date=document.getElementById("date_of_birth").value;
    if(date==false) {
        document.getElementById("frogot-date").style.display = "block";
        document.getElementById("frogot-date").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">chose a date of birth</p>';
        test=false; }
        else{
            document.getElementById("frogot-date").style.display = "none";
        }

var today = new Date();
var dateac1 = today.getFullYear()-65+'-'+(today.getMonth()+1)+'-'+today.getDate();
var dateac2 = today.getFullYear()-18+'-'+(today.getMonth()+1)+'-'+today.getDate();
if(date<dateac1)
{ document.getElementById("frogot-date-old").removeAttribute("hidden");
    document.getElementById("frogot-date-old").style.display = "block";
    document.getElementById("frogot-date-old").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">youre too old choose another date of birth</p>';
    test=false; 
}else{
    document.getElementById("frogot-date-old").style.display = "none";
}
if(date>dateac2)
{
    document.getElementById("frogot-date").style.display = "block";
    document.getElementById("frogot-date").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">youre too young choose another date of birth</p>';
    test=false;
}else{
    document.getElementById("frogot-date").style.display = "none";
}

var email=document.getElementById("email").value;
if(email==false) {
    document.getElementById("frogot-email").style.display = "block";
    document.getElementById("frogot-email").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write an email</p>';
    test=false; }
    else{
        document.getElementById("frogot-email").style.display = "none";
    }
if(email.includes('@esprit.tn'))
{
        document.getElementById("frogot-email").style.display = "none";
    
} 
else
{
    document.getElementById("frogot-email").style.display = "block";
    document.getElementById("frogot-email").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">your email should contain @esprit.tn</p>';
    test=false; 
}


var str=document.getElementById("password").value;
if(str==false) {
    document.getElementById("frogot-password").style.display = "block";
    document.getElementById("frogot-password").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write a password</p>'; 
    test=false; }
    else{
            document.getElementById("frogot-password").style.display = "none";
        
    }
if (str.length < 8) {
    document.getElementById("frogot-password").style.display = "block";
    document.getElementById("frogot-password").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">password too short</p>'; 
    test=false;
}
else{
    document.getElementById("frogot-password").style.display = "none";

} 
  if (str.search(/[0-9]/) == -1) {
    document.getElementById("frogot-password").style.display = "block";
    document.getElementById("frogot-password").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">password should contain numbers</p>';
    test=false;
}
else{
    document.getElementById("frogot-password").style.display = "none";

}  if (str.search(/[a-z]/) == -1) {
    document.getElementById("frogot-password").style.display = "block";
    document.getElementById("frogot-password").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">password should contain downcase letters</p>';
    test=false;
}else{
    document.getElementById("frogot-password").style.display = "none";

}
if (str.search(/[A-Z]/) == -1) {
    document.getElementById("frogot-password").style.display = "block";
    document.getElementById("frogot-password").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">password should contain UPcase letters</p>';
    test=false;
}else{
    document.getElementById("frogot-password").style.display = "none";

}



var selected = document.getElementById("role").value;

if (selected == "----") {
     
    document.getElementById("frogot-role").style.display = "block";
    document.getElementById("frogot-role").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">choose a role</p>';
       test=false; 
    }else{
        document.getElementById("frogot-role").style.display = "none";  
}
    if (selected == "Etudiant") {
        
        var classe = document.getElementById("classe").value;
        if (classe ==false) {
            document.getElementById("frogot-classe").style.display = "block";
            document.getElementById("frogot-classe").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write a class</p>';
           test=false; }else{
            document.getElementById("frogot-classe").style.display = "none";  
    }
        }
    if (selected == "Prof") {
        var idmatiere = document.getElementById("idmatiere").value;
           if (idmatiere ==false) {
            document.getElementById("frogot-idmatiere").style.display = "block";
            document.getElementById("frogot-idmatiere").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write a speciality</p>';
              test=false; }else{
                document.getElementById("frogot-idmatiere").style.display = "none";  
        }
       }


    }   
    } 
    
    
   
        
    