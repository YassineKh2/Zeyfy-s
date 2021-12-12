<?php
	include 'C:\xampp\htdocs\educaplay\config.php';
	include_once 'C:\xampp\htdocs\educaplay\model\Offre.php';
	class OffreC {
		function afficherOffre(){
			$sql="SELECT * FROM offres";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerOffre($idOffre){
			$sql="DELETE FROM offres WHERE idOffre=:idOffre";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idOffre', $idOffre);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
        function ajouterOffre($offres){

            $sql = "INSERT INTO offres (NomOffre, dateDebutOffre, pourcentageOffre, dateFinOffre)
                      VALUES (:NomOffre, :dateDebutOffre, :pourcentageOffre, :dateFinOffre)";
         $db = config::getConnexion();                 
         try{
             $query = $db->prepare($sql);
             $query->execute([
				 'NomOffre'=> $offres->getNomOffre(),
                 'dateDebutOffre'=> $offres->getdateDebutOffre(),
                 'pourcentageOffre'=> $offres->getpourcentageOffre(),
                 'dateFinOffre'=> $offres->getdateFinOffre()
             ]);
             header("Location:dashboard2.php");
     } catch (Exception $e){
         $e->getMessage();
     }
     
         }
		function recupererOffre($idOffre){
			$sql="SELECT * from offres where idOffre=$idOffre";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$offres=$query->fetch();
				return $offres;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierOffre($offres, $idOffre){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE offres SET 
					    NomOffre = :NomOffre, 
						dateDebutOffre = :dateDebutOffre, 
                        pourcentageOffre = :pourcentageOffre, 
						dateFinOffre = :dateFinOffre 
					WHERE idOffre = :idOffre"
				);
				$query->execute([
					'NomOffre' => $offres->getNomOffre(),
                    'dateDebutOffre' => $offres->getdateDebutOffre(),
                    'pourcentageOffre' => $offres->getpourcentageOffre(),
					'dateFinOffre' => $offres->getdateFinOffre(),
					'idOffre' => $idOffre
				]);
				header("Location:dashboard2.php");
				echo $query->rowCount() . " records UPDATED successfully <br>";

			} catch (PDOException $e) {
				die($e->getMessage());
			}
		}

	}
?>