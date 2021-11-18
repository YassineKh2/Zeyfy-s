<?php
include_once '../config.php';
include_once '../model/joueur_score.php';

class joueur_score_jeuxC{

function afficherscore(){
$sql="SELECT * FROM joueur_score";
$db= config::getConnexion();
try {

    $liste = $db->query($sql);
    return $liste;

}
catch(Exception $e){
    die('Erreur:' . $e->getMessage());
}

}

function supprimerscore($idJoueur){

    $sql="DELETE FROM joueur_score where idJoueur=:idJoueur";
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $req->bindValue(':idJoueur' , $idJoueur);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
}

function ajouterScore($joueur_score_jeux)
{
$sql= "INSERT INTO joueur_score(idJeux,idJoueur,score) values (:idJeux,:idJoueur,:score)";
$db = config::getConnexion();
    //var_dump($joueur_score_jeux);

    try{
  $query = $db->prepare($sql);
     $query->execute([
'idJeux'=>$joueur_score_jeux->getIdJeux(),
'idJoueur'=>$joueur_score_jeux->getIdJoueur(),
'score'=>$joueur_score_jeux->getScore(),
]);
    }
    catch (PDOException $e){
        $e->getMessage();
    }
}

function recupererscore($idJoueur)
    {
    $sql="SELECT * from joueur_score where
    idJoueur=$idJoueur";
    $db=config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();
        $joueur_score_jeux=$query->fetch();
        return $joueur_score_jeux;

    }
    catch(Exception $e)
    {die ('Erreur:'.$e->getMessage());
    }
}


function modifierscore ($joueur_score_jeux, $idJoueur)
{ 
    try {
        $db= config::getConnexion();
        $query=$db->prepare(
        
               
     "UPDATE joueur_score SET score=:score WHERE idJoueur=:idJoueur;"

    );
    $query->execute ([
        'score'=>$joueur_score_jeux->getScore(),
        'idJoueur'=>$idJoueur
 ]);    
 echo $query->rowcount() . "records UPDATED SUCCESSFULLY <br>";
}
catch (PDOException $e){
$e->getMessage();
}

}

}
?>