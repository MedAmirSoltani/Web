<?php

    require_once     '../Controller/AdherentC.php';
    require_once '../Model/Adherent.php' ;
    $adherentC = new AdherentC();
    

    if (isset($_POST['NumAdherent'] ) && isset($_POST['Nom'] ) && isset($_POST['Prenom'] )
        && isset($_POST['Adresse'] ) && isset($_POST['Email'] ) && isset($_POST['DateInscription'] )) 
    {
        echo $_POST['NumAdherent'] ;
            $adherent = new Adherent($_POST['NumAdherent'] , $_POST['Nom'] ,$_POST['Prenom'],
                    $_POST['Adresse'],$_POST['Email'],$_POST['DateInscription']);
            $adherentC->modifierAdherent($adherent);
            header('Location:afficherAdherent.php');
    }else
    {
        $a = $adherentC->getAdherentbyID($_GET['NumAdherent']) ;
    }



?>
<form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="NumAdherent">Numéro Adherent:
                        </label>
                    </td>
                    <td><input type="text" name="NumAdherent" id="NumAdherent" maxlength="20" value="<?php echo $a['NumAdherent'];?>"  readonly></td>
                </tr>
				<tr>
                    <td>
                        <label for="Nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" value="<?php echo $a['Nom'];?>" name="Nom" id="Nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Prenom">Prenom:
                        </label>
                    </td>
                    <td><input type="text" value="<?php echo $a['Prenom'];?>" name="Prenom" id="Prenom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Adresse">Adresse:
                        </label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $a['Adresse'];?>" name="Adresse" id="Adresse">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="email" value="<?php echo $a['Email'];?>" name="Email" id="Email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="DateInscription">Date d'inscription:
                        </label>
                    </td>
                    <td>
                        <input type="date" value="<?php echo $a['DateInscription'];?>" name="DateInscription" id="DateInscription" >
                    </td>
                </tr>              
                <tr>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>