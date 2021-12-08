<?php

    require_once '../Controller/Rec_autreC.php';
    require_once '../Model/Rec_autre.php' ;
    $rec_autreC = new Rec_autreC();
    

    if (isset($_POST['Id_autre'] ) && isset($_POST['Description'] )) 
    {
        echo $_POST['Description'] ;
            $rec_autre = new Rec_autre($_POST['Id_autre'] ,$_POST['Description']);
            $rec_autreC->modifierRec_autre($rec_autre);
            header('Location:afficherRec_autre.php');
    }else
    {
        $a = $rec_autreC->getRec_autrebyID($_GET['Id_autre']) ;
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
                        <label for="Id_autre">Id autre:
                        </label>
                    </td>
                    <td><input type="text" name="Id_autre" id="Id_autre" maxlength="20" value="<?php echo $a['Id_autre'];?>"  readonly></td>
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