<?php


class BlockC
{
	function afficherblocks()
	{
		$sql = "SELECT * FROM blocks";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}
	function supprimerblock($id)
	{
		$sql = "DELETE FROM blocks WHERE Id=:id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}
	function ajouterblock($block)
	{
		$sql = "INSERT INTO blocks (Id, Nom, Nbrsalles, Typesalles) 
			VALUES (:id,:nom,:nbrsalles,:typesalles)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'id' => $block->getId(),
				'nom' => $block->getNom(),
				'nbrsalles' => $block->getNbrsalles(),
				'typesalles' => $block->getTypesalles()
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	function recupererblock($id)
	{
		$sql = "SELECT * from blocks where Id=$id";
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

	function modifierblock($block, $id)
	{
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE blocks SET 
						Nom= :nom, 
						Nbrsalles= :nbrsalles, 
						Typesalles= :typesalles
					WHERE Id= :id'
			);
			$query->execute([
				'id' => $block->getId(),
				'nom' => $block->getNom(),
				'nbrsalles' => $block->getNbrsalles(),
				'typesalles' => $block->getTypesalles(),
				'id' => $id
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}


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

	function Ajoutrsall($res)
	{
		$sql = "INSERT INTO `Salles` VALUES (:id,:nom,:nbrprj,:nbrtabl,:nbrchai,:id_blc)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'id' => $res->getid(),
				'nom' => $res->getnom(),
				'nbrprj' => $res->getNbrprj(),
				'nbrtabl' => $res->getnbrtables(),
				'nbrchai' => $res->getnbrchais(),
				'id_blc' => $res->getidblc(),
			]);
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	/*
		function recupererSalles($id){
			$sql="SELECT * from Salles where Id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$adherent=$query->fetch();
				return $adherent;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		*/
	function Modifiersal($res)
	{
		$sqlc = "UPDATE `Salles` SET nom=:nome,Nbrprojecteurs=:nbrprj,Nbrtables=:nbrtabl,Nbrchaises=:nbrchai WHERE Id=:id  ";
		$db = config::getConnexion();
		try {
			$recipesStatement = $db->prepare($sqlc);
			$recipesStatement->execute([
				'id' => $res->getid(),
				'nome' => $res->getnom(),
				'nbrprj' => $res->getNbrprj(),
				'nbrtabl' => $res->getnbrtables(),
				'nbrchai' => $res->getnbrchais(),
			]);
		} catch (Exception $e) {

			die("erreur:" . $e->getMessage());
		}
	}
	function trieoffre()
	{
		$sql = "SELECT * FROM Salles ORDER BY nom";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die("erreur:" . $e->getMessage());
		}
	}
}
