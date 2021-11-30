<?php
include_once '../config.php';
include_once '../model/jeux.php';

class jeuxC{

    function afficherJeux(){
        $sql="SELECT * FROM jeux";
        $db=config::getConnexion();
        try {
          $liste =$db->query($sql);
            return $liste;
        
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
     }

     function supprimerJeux($idJeux){

        $sql="DELETE FROM jeux where idJeux=:idJeux";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idJeux' , $idJeux);
            try{
                $req->execute();
            }
            catch(Exception $e){
                die('Erreur:' . $e->getMessage());
            }
    }

    function ajouterJeux($jeux)
{
$sql= "INSERT INTO jeux(question,reponseA,reponseB,reponseC,correctAnswer,idCours,idCategorie,reponseD)
values (:question,:reponseA,:reponseB,:reponseC,:correctAnswer,:idCours,:idCategorie,:reponseD)";

$db = config::getConnexion();
    var_dump($jeux);

    try{
  $query = $db->prepare($sql);
     $query->execute([
'question'=>$jeux->getQuestion(),
'reponseA'=>$jeux->getreponseA(),
'reponseB'=>$jeux->getreponseB(),
'reponseC'=>$jeux->getreponseC(),
'correctAnswer'=>$jeux->getcorrectAnswer(),
'idCours'=>$jeux->getIdCours(),
'idCategorie'=>$jeux->getIdCategorie(),
'reponseD'=>$jeux->getreponseD()

]);
    }
    catch (PDOException $e){
        $e->getMessage();
    }
}


function recupererJeux($idJeux)
    {
    $sql="SELECT * from jeux where
    idJeux=$idJeux";
    $db=config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();
        $jeux=$query->fetch();
        return $jeux;

    }
    catch(Exception $e)
    {die ('Erreur:'.$e->getMessage());
    }
}

function modifierJeux ($jeux, $idJeux)
{ 
    try {
        $db= config::getConnexion();
        $query=$db->prepare(
        
               
     "UPDATE jeux SET question=:question,reponseA=:reponseA,reponseB=:reponseB,reponseC=:reponseC,reponseD=:reponseD,correctAnswer=:correctAnswer WHERE idJeux=:idJeux;"

    );
    $query->execute ([
        'question'=>$jeux->getQuestion(),
        'reponseA'=>$jeux->getreponseA(),
        'reponseB'=>$jeux->getreponseB(),
        'reponseC'=>$jeux->getreponseC(),
        'reponseD'=>$jeux->getreponseD(),
        'correctAnswer'=>$jeux->getcorrectAnswer(),
        'idJeux'=>$idJeux
 ]);    
 echo $query->rowcount() . "records UPDATED SUCCESSFULLY <br>";
}
catch (PDOException $e){
$e->getMessage();
}

}


}


?>