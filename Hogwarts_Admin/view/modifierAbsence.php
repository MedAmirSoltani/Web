<?php

    require_once '../Controller/AbsenceC.php';
    require_once '../Model/Absence.php' ;
    $absenceC = new AbsenceC();
    

    if (isset($_POST['Id_absence'] ) && isset($_POST['Module'] ) && isset($_POST['Date_absence'] )
        && isset($_POST['Heure_absence'] ) && isset($_POST['Description'] )) 
    {
        echo $_POST['Module'] ;
            $absence = new Absence($_POST['Id_absence'] , $_POST['Module'] ,$_POST['Date_absence'],
                    $_POST['Heure_absence'],$_POST['Description']);
            $absenceC->modifierAbsence($absence);
            header('Location:afficherAbsence.php');
    }else
    {
        $a = $absenceC->getAbsencebyID($_GET['Id_absence']) ;
    }



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reclamation</title>
        <link href="rec.css" rel="stylesheet">
        <script type="text/javascript" src="../Assets/js/Date.js"></script>
    </head>
<body>
<form action="" method="POST">
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="Id_absence">Id absence:
                        </label>
                    </td>
                    <td><input type="text" name="Id_absence" id="Id_absence" maxlength="20" value="<?php echo $a['Id_absence'];?>"  readonly></td>
                </tr>
                <tr>
                    <td>
                    <label for="Module">module:</label>
                    </td>
                    <td><select type="text" value="<?php echo $a['Module'];?>" name="Module" id="Module">
                            <option value=""><?php echo $a['Module'];?></option>
                            <option value="Projet Technologies web">Projet Technologies web</option>
                            <option value="Mathematique">Mathematique</option>
                            <option value="Base de Donnees">Base de Donnees</option></select></td>
                </tr>
				<tr>
                    <td>
                    <label for="Date_absence">Date d'Absence:</label>
                    </td>
                    <td><input type="date" value="<?php echo $a['Date_absence'];?>"  name="Date_absence" id="userdate" onchange="TDate()" required 
                     min="2021-01-01" max="2022-12-31"></td>
                </tr>
                <tr>
                    <td>
                    <label for="Heure_absence">Heure d'Absence:</label>
                    </td>
                    <td><input type="time" value="<?php echo $a['Heure_absence'];?>" id="Heure_absence" name="Heure_absence"
       min="09:00" max="18:00" required></td>
                </tr>
                <tr>
                    <td>
                    <label
    for="Description">Description:
</label>
                    </td>
                    <td>
                    <textarea name="Description" value="<?php echo $a['Description'];?>" id="Description" cols="30" rows="5"></textarea>
                    </td>
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