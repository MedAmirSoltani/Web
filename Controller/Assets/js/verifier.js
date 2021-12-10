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
    document.getElementById("specialite").removeAttribute("name");
    }
if (selectedvalue == "Prof") {
    document.getElementById("specialite").removeAttribute("hidden");
    document.getElementById("classe").removeAttribute("name");
   }
}
function checkname()
{
    var name = document.getElementById("name").value;
    if (name ==false) {
        document.getElementById("frogot-name").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write a name</p>';  
      return false;
        }
}
function checkname2()
{
    var name = document.getElementById("name").value;
    if (allLetter(name)===false) {        
        document.getElementById("frogot-name").style.display = "block";
        document.getElementById("frogot-name").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">the name should be in letters</p>'; 
        
        return false;
}else{
    document.getElementById("frogot-name").style.display = "none";
}
}

function checkfirst()
{
    var first_name=document.getElementById("first_name").value;
  
 if(first_name==false) {
     document.getElementById("frogot-first-name").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write a first name</p>';
     return false;}
       
}

function checkfirst2()
{
    var first_name=document.getElementById("first_name").value;
    if (allLetter(first_name)===false) {
        document.getElementById("frogot-first-name").style.display = "block";
        document.getElementById("frogot-first-name").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">the first name should be in letters</p>';
        return false;
}else{
    document.getElementById("frogot-first-name").style.display = "none";
}
}



function checkdate(){
    date=document.getElementById("date_of_birth").value;
    if(date==false) {
        document.getElementById("frogot-date").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">chose a date of birth</p>';
        return false; 
        }
        
       
}
function checkdate2()
{
    date=document.getElementById("date_of_birth").value;   
var today = new Date();
var dateac1 = today.getFullYear()-65+'-'+(today.getMonth()+1)+'-'+today.getDate();
if(date<dateac1)
{ 
   
    document.getElementById("frogot-date").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">youre too old choose another date of birth</p>';
    document.getElementById("frogot-date").style.display = "block";
    return false; 
}else{
    document.getElementById("frogot-date").style.display = "none";
}
}
function checkdate3(){
    date=document.getElementById("date_of_birth").value;   
var today = new Date();
var dateac2 = today.getFullYear()-18+'-'+(today.getMonth()+1)+'-'+today.getDate();
if(date>dateac2)
{ 
    alert("oo");
    document.getElementById("frogot-date").style.display = "block";
    document.getElementById("frogot-date").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">youre too old choose another date of birth</p>';
    
    return false; 
}else{
    document.getElementById("frogot-date").style.display = "none";
}
}


function checkemail(){
    var email=document.getElementById("email").value;
if(email==false) {
    document.getElementById("frogot-email").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write an email</p>';
    return false; }
    
}
function checkemail2(){
    var email=document.getElementById("email").value;
if(email.includes('@esprit.tn'))
{
        document.getElementById("frogot-email").style.display = "none";
    
} 
else
{
    document.getElementById("frogot-email").style.display = "block";
    document.getElementById("frogot-email").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">your email should contain @esprit.tn</p>';
    return false; 
}
}



function checkpass(){
    var str=document.getElementById("password").value;
    if(str==false) {
        document.getElementById("frogot-password").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write a password</p>'; 
        return false; }
    }
    function checkpass2(){ 
        var str=document.getElementById("password").value;   
    if (str.length < 8) {
        document.getElementById("frogot-password").style.display = "block";
        document.getElementById("frogot-password").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">password too short</p>'; 
        return false;
    }
    else{
        document.getElementById("frogot-password").style.display = "none";
    
    }
}
function checkpass3(){
    var str=document.getElementById("password").value;
      if (str.search(/[0-9]/) == -1) {
        document.getElementById("frogot-password").style.display = "block";
        document.getElementById("frogot-password").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">password should contain numbers</p>';
        return false;
    }
    else{
        document.getElementById("frogot-password").style.display = "none";
    
    }}
    function checkpass4(){
        var str=document.getElementById("password").value;
      if (str.search(/[a-z]/) == -1) {
        document.getElementById("frogot-password").style.display = "block";
        document.getElementById("frogot-password").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">password should contain downcase letters</p>';
        return false;
    }else{
        document.getElementById("frogot-password").style.display = "none";
    
    }}
    function checkpass5(){
        var str=document.getElementById("password").value;
    if (str.search(/[A-Z]/) == -1) {
        document.getElementById("frogot-password").style.display = "block";
        document.getElementById("frogot-password").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">password should contain UPcase letters</p>';
        return false;
    }else{
        document.getElementById("frogot-password").style.display = "none";
    
    }
}


function checkrole(){
    var selected = document.getElementById("role").value;

if (selected == "----") {
     
    document.getElementById("frogot-role").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">choose a role</p>';
       return false; 
    }
    else{
        document.getElementById("frogot-role").style.display = "none";  
}
    
}
function checkclasse(){
    var selected = document.getElementById("role").value;
    if (selected == "Etudiant") {
        
        var classe = document.getElementById("classe").value;
        if (classe ==false) {
            document.getElementById("frogot-classe").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write a class</p>';
           return false; 
        }else{
            document.getElementById("frogot-classe").style.display = "none";  
    }
}
}
function checkspecialite()
{ var selected = document.getElementById("role").value;
    if (selected == "Prof") {
        var specialite = document.getElementById("specialite").value;
           if (specialite ==false) {
            document.getElementById("frogot-specialite").style.display = "block";
            document.getElementById("frogot-specialite").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write a speciality</p>';
              return false; }else{
                document.getElementById("frogot-specialite").style.display = "none";  
        }
       }
}
function checkcaptcha()
{ 
    var captcha = document.getElementById("captcha").value;
if(captcha==false) {
    document.getElementById("frogot-captcha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write a the code shown in the picture</p>'; 
    return false; }
else{
                document.getElementById("frogot-captcha").style.display = "none";  
        }      
}
function getselectedvalue() {

        
        var test1=checkname2();
        var test2=checkname(); 
        var test3=checkfirst2(); 
        var test4=checkfirst();
        var test5=checkdate3();
        var test6=checkdate2();
        var test7=checkdate();
        var test8=checkemail2();
        var test9=checkemail();
        var test10=checkpass5();
        var test11=checkpass4();
        var test12=checkpass3();
        var test13=checkpass2();
        var test14=checkpass(); 
        var test15=checkrole();
        var test16=checkclasse();
        var test17=checkspecialite();
       var test18=checkcaptcha(); 
        if(test1==false || test2==false || test3==false || test4==false || test5==false || test6==false|| test7==false|| test8==false|| test9==false|| test10==false || test11==false|| test12==false|| test13==false|| test14==false|| test15==false || test16==false|| test17==false|| test18==false)
        { return false; }
        
        
        
        
        
        


       

} 



    
