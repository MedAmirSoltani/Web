<?php
    include_once '../Model/Salles.php';
    include_once '../Controller/SallesC.php';

    $error = "";

    // create adherent
    $Salles = null;

    // create an instance of the controller
    $SallesC = new SallesC();
    if (
        isset($_POST["id"]) &&
		isset($_POST["nbrprojecteurs"]) &&		
        isset($_POST["nbrtables"]) &&
		isset($_POST["nbrchaises"])
    ) {
        if (
            !empty($_POST["id"]) && 
			!empty($_POST['nbrprojecteurs']) &&
            !empty($_POST["nbrtables"]) && 
			!empty($_POST["nbrchaises"])
        ) {
            $salles = new Salles(
                $_POST['id'],
				$_POST['nbrprojecteurs'],
                $_POST['nbrtables'], 
				$_POST['nbrchaises']
            );
            $SallesC->ajouterSalles($Salles);
            header('Location:ListeSalles.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <a href="ListeSalles.php"><button>Retour à la liste des Salles</button></a>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">Id Salles:
                        </label>
                    </td>
                    <td><input type="number" name="id" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="nbrprojecteurs">nbrprojecteurs:
                        </label>
                    </td>
                    <td><input type="text" name="nbrprojecteurs" id="nbrprojecteurs" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nbrtables">nbrtables:
                        </label>
                    </td>
                    <td><input type="number" name="nbrtables" id="nbrtables" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nbrchaises">nbrchaises:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nbrchaises" id="nbrchaises">
                    </td>
                </tr>
                <tr>
                    <td></td>
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