<?php
include_once('C:\xampp\htdocs\educaplay\config.php');
include 'C:\xampp\htdocs\educaplay\model\Formation.php';
/*hhhhhhhhhhhhhhhhhhhhh*/
/*hhhhhhhhhhhhhhhhhhhhh*/
class FormationC {
    function afficherformations(){
        $sql="SELECT * FROM formations order by date_c";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function afficherformationssss(){
        $sql="SELECT * FROM formations order by id_formation desc limit 1";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function afficherformationss($sta,$categ){
        $sql="SELECT * FROM formations WHERE statut = '$sta' AND filiere = '$categ'";
        $db = config::getConnexion();
        try{                                                                                   
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function afficherformationsss($tem){
        $sql="SELECT * FROM formations WHERE statut = '$tem' or filiere = '$tem' or titre_f = '$tem' or prix_f = '$tem' ";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function afficherformationsd(){
        $sql="SELECT * FROM formations WHERE statut='en coure' order by date_c";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function afficherformationsc($categ){
        $sql="SELECT * FROM formations WHERE filiere='$categ'";
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

       $sql = "INSERT INTO formations (date_c,filiere, titre_f, descreptions,prix_f,image, statut)
                 VALUES (:date_c, :filiere, :titre_f, :descreptions, :prix_f, :image, 'en coure')";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'date_c'=> $formations->getdate_c(),
            'filiere'=> $formations->getfiliere(),
            'titre_f'=> $formations->gettitre_f(),
            'descreptions'=> $formations->getdescreptions(),
            'prix_f'=> $formations->getprix_f(),
            'image'=> $formations->getimage()
        ]);
        $_SESSION['error']="data add seccsesfuly";
        header("Location:index2.php");
} catch (Exception $e){
    $e->getMessage();
}

    }
   function modifierformations($id_formation,$formations){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE formations SET date_c = :date_c, filiere = :filiere, titre_f = :titre_f, descreptions = :descreptions WHERE id_formation= :id_formation');
$query->execute([
    'date_c'=> $formations->getdate_c(),
    'filiere'=> $formations->getfiliere(),
    'titre_f'=> $formations->gettitre_f(),
    'descreptions'=> $formations->getdescreptions(),
    'id_formation'=> $id_formation
]);
    } catch (Exception $e){
        $e->getMessage();
}}
function modifierstatutA($id_formation,$formations){
    try{
     $db = config::getConnexion();
$query = $db->prepare('UPDATE formations SET statut = "acceptée" WHERE id_formation= :id_formation');
$query->execute([
 
 'id_formation'=> $id_formation
]);
 } catch (Exception $e){
     $e->getMessage();
}}
function modifierstatutR($id_formation,$formations){
    try{
     $db = config::getConnexion();
$query = $db->prepare('UPDATE formations SET statut = "refusée" WHERE id_formation= :id_formation');
$query->execute([
 
 'id_formation'=> $id_formation
]);
 } catch (Exception $e){
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
}catch (Exception $e){
    $e->getMessage();}
}

/********************************************Function count prog*****************************************/
Function count_prog(){

	$sql="SELECT count(id_formation) FROM formations WHERE filiere='programmation' " ;
    $db = config::getConnexion();
    try{
        $query = $db->query($sql);
        $query->execute();
   	    $prog_number =$query->fetchColumn();
        return $prog_number;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }   
}
/********************************************Function count math*****************************************/
Function count_math(){

	$sql="SELECT count(id_formation) FROM formations WHERE filiere='mathématiques' " ;
    $db = config::getConnexion();
    try{
        $query = $db->query($sql);
        $query->execute();
   	    $math_number =$query->fetchColumn();
        return $math_number;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }   
}
/********************************************Function count res*****************************************/
Function count_res(){

	$sql="SELECT count(id_formation) FROM formations WHERE filiere='réseaux' " ;
    $db = config::getConnexion();
    try{
        $query = $db->query($sql);
        $query->execute();
   	    $res_number =$query->fetchColumn();
        return $res_number;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }   
}
}
?>