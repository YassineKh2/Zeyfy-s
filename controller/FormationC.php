<?php
session_start();
include '../config.php';
include '../model/Formation.php';
class FormationC {
    function afficherformations(){
        $sql="SELECT * FROM formations";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function supprimerformations($id_formation){
        $sql=" DELETE FROM formations WHERE id_formation=:id_formation";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_formation' , $id_formation);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function ajouterformation($formations){

       $sql = "INSERT INTO formations (date_c,filiere, titre_f, descriptions,prix_f,image)
                 VALUES (:date_c, :filiere, :titre_f, :descriptions, :prix_f, :image)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'date_c'=> $formations->getdate_c(),
            'filiere'=> $formations->getfiliere(),
            'titre_f'=> $formations->gettitre_f(),
            'descriptions'=> $formations->getdescriptions(),
            'prix_f'=> $formations->getprix_f(),
            'image'=> $formations->getimage()
        ]);
        $_SESSION['error']="data add seccsesfuly";
        header("Location: ../views/FormAjoutFormation.php");
} catch (PDOExeption $e){
    $e->getMessage();
}

    }
   function modifierformations($id_formation,$formations){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE formations SET date_c = :date_c, filiere = :filiere, titre_f = :titre_f, descriptions = :descriptions WHERE id_formation= :id_formation');
$query->execute([
    'date_c'=> $formations->getdate_c(),
    'filiere'=> $formations->getfiliere(),
    'titre_f'=> $formations->gettitre_f(),
    'descriptions'=> $formations->getdescriptions(),
    'id_formation'=> $id_formation
]);
    } catch (PDOExeption $e){
        $e->getMessage();
}}
function recupererformations($id_formation){
    $sql="SELECT * from formations where id_formation=$id_formation";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$formations=$query->fetch();
return $formations;
}catch (PDOExeption $e){
    $e->getMessage();}
}
}
?>