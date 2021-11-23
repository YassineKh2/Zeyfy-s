<?php
	include '../config.php';
	include_once '../Model/Offre.php';
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

            $sql = "INSERT INTO offres (dateDebutOffre, pourcentageOffre, dateFinOffre)
                      VALUES (:dateDebutOffre, :pourcentageOffre, :dateFinOffre)";
         $db = config::getConnexion();                 
         try{
             $query = $db->prepare($sql);
             $query->execute([
                 'dateDebutOffre'=> $offres->getdateDebutOffre(),
                 'pourcentageOffre'=> $offres->getpourcentageOffre(),
                 'dateFinOffre'=> $offres->getdateFinOffre()
             ]);
             header("Location: ../Views/formAjoutOffre.php");
     } catch (PDOExeption $e){
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
						dateDebutOffre = :dateDebutOffre, 
                        pourcentageOffre = :pourcentageOffre, 
						dateFinOffre = :dateFinOffre 
					WHERE idOffre = :idOffre"
				);
				$query->execute([
                    'dateDebutOffre' => $offres->getdateDebutOffre(),
                    'pourcentageOffre' => $offres->getpourcentageOffre(),
					'dateFinOffre' => $offres->getdateFinOffre(),
					'idOffre' => $idOffre
				]);
				header("Location: ../Views/dashboard2.php");
				echo $query->rowCount() . " records UPDATED successfully <br>";

			} catch (PDOException $e) {
				die($e->getMessage());
			}
		}

	}
?>