<?php
    include_once '../Model/Block.php';
    include_once '../Controller/BlockC.php';

    $error = "";

    // create adherent
    $block = null;

    // create an instance of the controller
    $BlockC = new BlockC();
    if (
        isset($_POST["id"]) &&
		isset($_POST["nom"]) &&		
        isset($_POST["nbrsalles"]) &&
		isset($_POST["typesalles"])
    ) {
        if (
            !empty($_POST["id"]) && 
			!empty($_POST["nom"]) &&
            !empty($_POST["nbrsalles"]) && 
			!empty($_POST["typesalles"]) 
        ) {
            $block = new Block(
                $_POST['id'],
				$_POST['nom'],
                $_POST['nbrsalles'], 
				$_POST['typesalles']
            );
            $BlockC->modifierblock($block, $_POST["id"]);
            header('Location:ListeBlocks.php');
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
        <button><a href="ListeBlocks.php">Retour à la liste des blocks</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['id'])){
				$block = $BlockC->recupererblock($_POST['id']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">Id Block :
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" value="<?php echo $block['Id']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" value="<?php echo $block['Nom']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nbrsalles">Nombre des salles:
                        </label>
                    </td>
                    <td><input type="text" name="nbrsalles" id="nbrsalles" value="<?php echo $block['Nbrsalles']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse">Type des salles:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="typesalles" value="<?php echo $block['Typesalles']; ?>" id="adresse">
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