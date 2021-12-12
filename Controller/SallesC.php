<?php


class SallesC
{
	function afficherSalles()
	{
		$sql = "SELECT * FROM salles";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}
	function ShowSalles($idb)
	{
		$requete = "select * from salles Where id_block=:idb ";
		$config = config::getConnexion();
		try {
			$querry = $config->prepare($requete);
			$querry->execute(['idb' => $idb]);
			$result = $querry->fetchAll();
			return $result;
		} catch (PDOException $th) {
			$th->getMessage();
		}
	}

	function supprimerSalles($id)
	{
		$sql = "DELETE FROM Salles WHERE Id=:id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}
	function ajouterSalles($Salles)
	{
		$sql = "INSERT INTO Salles (Id, Nom, NbrSalles, TypeSalles) 
			VALUES (:id,:nom,:nbrSalles,:typeSalles)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'id' => $Salles->getId(),
				'nom' => $Salles->getNom(),
				'nbrSalles' => $Salles->getNbrSalles(),
				'typeSalles' => $Salles->getTypeSalles()
			]);
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function recupererSalles($id)
	{
		$sql = "SELECT * from Salles where Id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$adherent = $query->fetch();
			return $adherent;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function modifierSalles($Salles, $id)
	{
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE Salles SET 
						Nom= :nom, 
						NbrSalles= :nbrSalles, 
						TypeSalles= :typeSalles
						
					WHERE Id= :id'
			);
			$query->execute([
				'id' => $Salles->getId(),
				'nom' => $Salles->getNom(),
				'nbrSalles' => $Salles->getNbrSalles(),
				'typeSalles' => $Salles->getTypeSalles(),
				'id' => $id
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}
}
