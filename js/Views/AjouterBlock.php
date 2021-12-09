<?php
    include_once '../Model/Block.php';
    include_once '../Controller/BlockC.php';

    $error = "";

    // create adherent
    $block = null;

    // create an instance of the controller
    $blockC = new BlockC();
    if (
        isset($_POST["id"]) &&
		isset($_POST["nom"]) &&		
        isset($_POST["nbrsalles"]) &&
		isset($_POST["typesalles"])
    ) {
        if (
            !empty($_POST["id"]) && 
			!empty($_POST['nom']) &&
            !empty($_POST["nbrsalles"]) && 
			!empty($_POST["typesalles"])
        ) {
            $block = new Block(
                $_POST['id'],
				$_POST['nom'],
                $_POST['nbrsalles'], 
				$_POST['typesalles']
            );
            $blockC->ajouterblock($block);
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
        <a href="ListeBlocks.php"><button>Retour à la liste des blocks</button></a>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">Id Block:
                        </label>
                    </td>
                    <td><input type="number" name="id" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nbrsalles">Nombre des salles:
                        </label>
                    </td>
                    <td><input type="number" name="nbrsalles" id="prenom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="typesalles">Type des salles:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="typesalles" id="typesalles">
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