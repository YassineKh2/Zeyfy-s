<?php
include 'C:\xampp\htdocs\Project web\config.php';
include 'C:\xampp\htdocs\Project web\models\utilisateurs.php';
class utilisateurc{
    function recupererutilisateur(){
        $sql="SELECT * FROM utilisateurs";
        $db = config::getConnexion();
        try{
            $listeutilisateurs = $db->query($sql);
            return $listeutilisateurs;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMessage());
    }
    
}
function ajouterutilisateur($utilisateur){
    $sql="INSERT INTO utilisateurs (nomUtilisateur,prenomUtilisateur,mdpUtilisateur,Email,username) 
    VALUES (:nomUtilisateur,:prenomUtilisateur,:mdpUtilisateur,:Email,:username)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'nomUtilisateur' => $utilisateur->getNom(),
            'prenomUtilisateur' => $utilisateur->getPrenom(),
            'mdpUtilisateur' => $utilisateur->getmdp(), 
            'Email' => $utilisateur->getEmail(),
            'username' => $utilisateur->getUsername()
        ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }			
}
function supprimerutilisateur($idUtilisateur){
    $sql="DELETE FROM utilisateurs WHERE idUtilisateur=:idUtilisateur";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':idUtilisateur', $idUtilisateur);
    try{
        $req->execute();
    }
    catch(Exception $e){
        die('Erreur:'. $e->getMessage());
    }
}
function recupererutilisateurinfo($idUtilisateur){
    $sql="SELECT * from utilisateurs where idUtilisateur=$idUtilisateur";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $utilisateur=$query->fetch();
        return $utilisateur;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function modifierutilisateur($utilisateur, $idUtilisateur){
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE utilisateurs SET 
                nomUtilisateur= :nomUtilisateur, 
                prenomUtilisateur= :prenomUtilisateur, 
                mdpUtilisateur= :mdpUtilisateur, 
                Email= :Email,
                username= :username
            WHERE idUtilisateur= :idUtilisateur'
        );
        $query->execute([
            'nomUtilisateur' => $utilisateur->getNom(),
            'prenomUtilisateur' => $utilisateur->getPrenom(),
            'mdpUtilisateur' => $utilisateur->getmdp(),
            'Email' => $utilisateur->getEmail(),
            'username' => $utilisateur->getUsername(),
            'idUtilisateur' => $idUtilisateur
            
        ]);
        //echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
function desactivate($idUtilisateur){
    $db = config::getConnexion();
    $sql = "UPDATE utilisateurs SET etat=0 WHERE idUtilisateur=$idUtilisateur";
    $stmt = $db->prepare($sql);
    $stmt->execute();
}
function activate($idUtilisateur){
    $db = config::getConnexion();
    $sql = "UPDATE utilisateurs SET etat=1 WHERE idUtilisateur=$idUtilisateur";
    $stmt = $db->prepare($sql);
    $stmt->execute();
}
function recupererdernierutilisateur(){
    $sql="SELECT * FROM utilisateurs WHERE idUtilisateur=(SELECT max(idUtilisateur) FROM utilisateurs)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute();
        $dernierutilisateurs=$query->fetch();
        return $dernierutilisateurs;
    }
    catch(Exception $e){
        die('Erreur:'. $e->getMessage());
}
}
function ajouterjoueur($id){
    $sql="INSERT INTO joueur (idJoueur) VALUES ($id)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute();			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }			
}
}
?>