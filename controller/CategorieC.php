<?php
	include_once 'C:\xampp\htdocs\educaplay\config.php';
	include_once 'C:\xampp\htdocs\educaplay\model\Categorie.php';
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

            $sql = "INSERT INTO categorie (NomCategorie, NomOffre)
                      VALUES (:NomCategorie, :NomOffre)";
         $db = config::getConnexion();
         try{
             $query = $db->prepare($sql);
             $query->execute([
                 'NomCategorie'=> $categorie->getNomCategorie(),
                 'NomOffre'=> $categorie->getNomOffre()
             ]);
             header("Location:dashboard.php");
     } catch (Exception $e){
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
						NomOffre = :NomOffre 
					WHERE IdCategorie = :IdCategorie"
				);
			//die("-->".$IdCategorie);
			//die( $categorie->getNomCategorie()." - ".$categorie->getidJeux()." - " .$categorie->getNomOffre());
				$query->execute([
                    'NomCategorie' => $categorie->getNomCategorie(),
					'NomOffre' => $categorie->getNomOffre(),
					'IdCategorie' => $IdCategorie
				]);
				header("Location:dashboard.php");
				echo $query->rowCount() . " records UPDATED successfully <br>";

			} catch (PDOException $e) {
				die($e->getMessage());
			}
		}

	}
?>