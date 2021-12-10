function allLetter(word) {
    var letters = /^[A-Za-z]+$/;
    if (word.match(letters)) {
        return true;
    }
    else {
        return false;
    }
}


    function getselectedvalue() {
       
        var name = document.getElementById("name").value;
        if (name ==false) {
           document.getElementById("badelha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write a name</p>';
           return false;
           preventdefault(); }
           if (allLetter(name)===false) {
                
            document.getElementById("badelha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">the name should be in letters</p>';
            return false;
            preventdefault();
    }


    var first_name=document.getElementById("first_name").value;
  
 if(first_name==false) {
     document.getElementById("badelha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write a first name</p>';
 return false;
        preventdefault(); }
        

        if (allLetter(first_name)===false) {
            document.getElementById("badelha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">the first name should be in letters</p>';
            return false;
            preventdefault();
    }

    date=document.getElementById("date_of_birth").value;
    if(date==false) {
        document.getElementById("badelha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">chose a date of birth</p>';
        return false;
        preventdefault(); }

var today = new Date();
var dateac1 = today.getFullYear()-65+'-'+(today.getMonth()+1)+'-'+today.getDate();
var dateac2 = today.getFullYear()-18+'-'+(today.getMonth()+1)+'-'+today.getDate();
if(date<dateac1)
{
    document.getElementById("badelha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">youre too old choose another date of birth</p>';
return false;
preventdefault(); 
}
if(date>dateac2)
{
    document.getElementById("badelha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">youre too young choose another date of birth</p>';
return false;
preventdefault(); 
}

var email=document.getElementById("email").value;
if(email==false) {
    document.getElementById("badelha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write an email</p>';
    return false;
    preventdefault(); }
if(email.includes('@esprit.tn'))
{

} 
else
{
    document.getElementById("badelha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">your email should contain @esprit.tn</p>';
return false;
preventdefault(); 
}


var str=document.getElementById("password").value;
if(str==false) {
    document.getElementById("badelha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">write a password</p>'; 
    return false;
    preventdefault(); }
if (str.length < 8) {
    document.getElementById("badelha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">password too short</p>'; 
    return false;
    preventdefault();
} 
 else if (str.search(/[0-9]/) == -1) {
    document.getElementById("badelha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">password should contain numbers</p>';
    return false;
    preventdefault();
} else if (str.search(/[a-z]/) == -1) {
    document.getElementById("badelha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">password should contain downcase letters</p>';
    return false;
    preventdefault();
}
else if (str.search(/[A-Z]/) == -1) {
    document.getElementById("badelha").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin: 30px 10 0 20;" id="erreur">password should contain UPcase letters</p>';
    return false;
    preventdefault();
}




        
           
        }
    