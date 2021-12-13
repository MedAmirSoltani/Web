<?php
include_once '../Assets/ASFO/utilis/Config.php';
    include_once '../Model/Block.php';
    include_once '../Controller/BlockC.php';
    include '../Controller/SallesC.php';
    include_once '../Model/Salles.php';

    $error = "";

    // create adherent
    $Salles = null;

    // create an instance of the controller
    $SallesC = new SallesC();
    if (
        isset($_POST["id"]) &&
        isset($_POST["nom"]) &&
		isset($_POST["nbrprojecteurs"]) &&		
        isset($_POST["nbrtables"]) &&
		isset($_POST["nbrchaises"])
    ) {
        if (
            !empty($_POST["id"]) && 
			!empty($_POST["nbrprojecteurs"]) &&
            !empty($_POST["nbrtables"]) && 
			!empty($_POST["nbrchaises"]) 
        ) {
            $Salles = new Salles(
                $_POST['id'],
                $_POST['nom'],
				$_POST['nbrprojecteurs'],
                $_POST['nbrtables'], 
				$_POST['nbrchaises'],
                $_POST["idb"]
            );
            $SallesC->modifierSalles($Salles, $_POST["id"]);
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
        <button><a href="ListeSalles.php">Retour à la liste des Salles</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['id'])){
				$Salles = $SallesC->recupererSalles($_POST['id']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">Id Salles :
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" value="<?php echo $Salles['Id']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="nbrprojecteurs">nbrprojecteurs:
                        </label>
                    </td>
                    <td><input type="text" name="nbrprojecteurs" id="nbrprojecteurs" value="<?php echo $Salles['nbrprojecteurs']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nbrtables">nbrtables:
                        </label>
                    </td>
                    <td><input type="text" name="nbrtables" id="nbrtables" value="<?php echo $Salles['nbrtables']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse">nbrchaises:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nbrchaises" value="<?php echo $Salles['nbrchaises']; ?>" id="adresse">
                    </td>
                </tr>         
                <tr>
                    <td>
                        <input type="text" name="idb" value="<?php echo $Salles['id_block']; ?>" id="idb" hidden>
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>