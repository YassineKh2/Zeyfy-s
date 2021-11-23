<?php
	include '../config.php';
	include_once '../Model/Categorie.php';
	class CategorieC {
		function afficherCategorie(){
			$sql="SELECT * FROM categorie";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerCategorie($IdCategorie){
			$sql="DELETE FROM categorie WHERE IdCategorie=:IdCategorie";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':IdCategorie', $IdCategorie);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
        function ajouterCategorie($categorie){

            $sql = "INSERT INTO categorie (NomCategorie, idOffre)
                      VALUES (:NomCategorie, :idOffre)";
         $db = config::getConnexion();
         try{
             $query = $db->prepare($sql);
             $query->execute([
                 'NomCategorie'=> $categorie->getNomCategorie(),
                 'idOffre'=> $categorie->getidOffre()
             ]);
             header("Location: ../Views/formAjoutCategorie.php");
     } catch (PDOExeption $e){
         $e->getMessage();
     }
     
         }
		function recupererCategorie($IdCategorie){
			$sql="SELECT * from categorie where IdCategorie=$IdCategorie";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$categorie=$query->fetch();
				return $categorie;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierCategorie($categorie, $IdCategorie){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE categorie SET 
						NomCategorie = :NomCategorie, 
						idOffre = :idOffre 
					WHERE IdCategorie = :IdCategorie"
				);
			//die("-->".$IdCategorie);
			//die( $categorie->getNomCategorie()." - ".$categorie->getidJeux()." - " .$categorie->getidOffre());
				$query->execute([
                    'NomCategorie' => $categorie->getNomCategorie(),
					'idOffre' => $categorie->getidOffre(),
					'IdCategorie' => $IdCategorie
				]);
				header("Location: ../Views/dashboard.php");
				echo $query->rowCount() . " records UPDATED successfully <br>";

			} catch (PDOException $e) {
				die($e->getMessage());
			}
		}

	}
?>