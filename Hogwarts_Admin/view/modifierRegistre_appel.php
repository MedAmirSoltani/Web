<?php

    require_once '../Controller/Registre_appelC.php';
    require_once '../Model/Registre_appel.php' ;
    $registre_appelC = new Registre_appelC();
    

    if (isset($_POST['IdRegistre'] ) && isset($_POST['Etudiant'] )&& isset($_POST['Date'] )&& isset($_POST['Heure'] )&& isset($_POST['Etat'] )) 
    {
        echo $_POST['Etudiant'] ;
            $registre_appel = new Registre_appel($_POST['IdRegistre'] , $_POST['Etudiant'], $_POST['Date'], $_POST['Heure'], $_POST['Etat']);
            $registre_appelC->modifierRegistre_appel($registre_appel);
            header('Location:afficherRegistre_appel.php');
    }else
    {
        $a = $registre_appelC->getRegistre_appelbyID($_GET['IdRegistre']) ;
    }



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registre d'appel</title>
        <link href="rec.css" rel="stylesheet">
        <script type="text/javascript" src="../Assets/js/Date.js"></script>
    </head>
<body>
<form action="" method="POST">
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="IdRegistre">Id absence:
                        </label>
                    </td>
                    <td><input type="text" name="IdRegistre" id="IdRegistre" maxlength="20" value="<?php echo $a['IdRegistre'];?>"  readonly></td>
                </tr>
                <tr>
                    <td>
                    <label for="Etudiant">Nom Etudiant:</label>
                    </td>
                    <td><select type="text" value="<?php echo $a['Etudiant'];?>" name="Etudiant" id="Etudiant" >
                    <option value=""><?php echo $a['Etudiant'];?></option>
                            <option value="Mohamed Rayen Dhraief">Mohamed Rayen Dhraief</option>
                            <option value="Amir Soltani">Amir Soltani</option>
                            <option value="Yesmine Guesmi">Yesmine Guesmi</option>
                            <option value="Adam Rafraf">Adam Rafraf</option></select></td>
                </tr>
                <tr>
                    <td>
                    <label for="Date">Date d'Absence:</label>
                    </td>
                    <td><input type="date" value="<?php echo $a['Date'];?>" name="Date" id="userdate" onchange="TDate()"  
                    min="2021-09-13"  max="2022-06-06" ></td>
                </tr>
                <tr>
                    <td>
                    <label for="Heure">Heure d'Absence:</label>
                    </td>
                    <td><input type="time" value="<?php echo $a['Heure'];?>" id="Heure" name="Heure"
       min="09:00" max="18:00" required></td>
                </tr>
                <tr>
                    <td>
                    <label for="Etat">Etat:</label>
                    </td>
                    <td><select type="text" value="<?php echo $a['Etat'];?>" name="Etat" id="Etat">
                    <option value=""><?php echo $a['Etat'];?></option>
                            <option value="présent">présent</option>
                            <option value="absent">absent</option></select></td>
                </tr>
			
                <tr>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
        </body>
</html>