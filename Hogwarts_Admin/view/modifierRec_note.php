<?php

    require_once '../Controller/Rec_noteC.php';
    require_once '../Model/Rec_note.php' ;
    $rec_noteC = new Rec_noteC();
    

    if (isset($_POST['Id_note'] ) && isset($_POST['Module'] ) && isset($_POST['Description'] )) 
    {
        echo $_POST['Module'] ;
            $rec_note = new Rec_note($_POST['Id_note'] , $_POST['Module'] ,$_POST['Description']);
            $rec_noteC->modifierRec_note($rec_note);
            header('Location:afficherRec_note.php');
    }else
    {
        $a = $rec_noteC->getRec_notebyID($_GET['Id_note']) ;
    }



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reclamation</title>
        <link href="rec.css" rel="stylesheet">
    </head>
<body>
<form action="" method="POST">
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="Id_note">Id note:
                        </label>
                    </td>
                    <td><input type="text" name="Id_note" id="Id_note" maxlength="20" value="<?php echo $a['Id_note'];?>"  readonly></td>
                </tr>
                <tr>
                    <td>
                    <label for="Module">module:</label>
                    </td>
                    <td><select type="text" name="Module" id="Module" value="<?php echo $a['Module'];?>" >
                            <option value=""><?php echo $a['Module'];?></option>
                            <option value="Projet Technologies web">Projet Technologies web</option>
                            <option value="Mathematique">Mathematique</option>
                            <option value="Base de Donnees">Base de Donnees</option></select></td>
                </tr>
				
                <tr>
                    <td>
                    <label
    for="Description">Description:
</label>
                    </td>
                    <td>
                    <textarea name="Description" id="Description" value="<?php echo $a['Description'];?>"  cols="30" rows="5"></textarea>
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