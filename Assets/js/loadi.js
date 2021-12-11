//pour la modificatiob seulement
window.onload =function () {
    role =document.getElementById("role").value;
    if (role=="Etudiant") 
        {
          document.getElementById("classe").removeAttribute("hidden");
            document.getElementById("idmatiere").removeAttribute("name");
         // document.getElementById("ot").innerHTML='<tr><td><label for="classe">classe:</label></td><td><input type="text" value="<?php echo $b['classe'];?>" name="classe" id="classe" maxlength="20"></td></tr>';
        }
       else if (role=="Prof") 
        {
          document.getElementById("idmatiere").removeAttribute("hidden");
            document.getElementById("classe").removeAttribute("name");
         // document.getElementById("ot").innerHTML='<tr><td><label for="specialite">specialite:</label></td><td><input type="text" value="<?php echo $c['specialite'];?>" name="specialite" id="specialite" maxlength="20"></td></tr>';
        }

        
      }