<?php
include '../config.php';
include '../model/joueur_score.php';

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

function supprimerscore(){

    $sql="DELETE FROM joueur_score where score=:score";
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $req->bindValue(':score' , $score);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
}

function ajouterScore($score)
{
$sql= "INSERT INTO joueur_score(idJeux,idJoueur,score) values (:idJeux,:idJoueur,:score)";
$db = config::getConnexion();
    var_dump($score);

    try{
  $query = $db->prepare($sql);
     $query->execute([
'idJeux'=>$joueur_score_jeux->getIdJeux(),
'idJoueur'=>$joueur_score_jeux->getIdJoueur(),
'score'=>$score->getScore(),
]);
    }
    catch (PDOExeption $e){
        $e->getMessage();
    }
}

function recupererscore($score)
    {
    $sql="SELECT * from joueur_score where
    score=$score";
    $db=config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();
        $adherent=$query->fetch();
        return $score;

    }
    catch(Exception $e)
    {die ('Erreur:'.$e->getMessage());
    }
}


function modifierscore ($joueur_score_jeux , $idJoueur)
{ 
    try {
        $db= config::getConnexion();
        $query=$db->prepare(
     'UPDATE joueur_score SET
 score= :score, 
    
     Where idJoueur= :idJoueur'
    );
    $query->execute ([
    'idJeux'=> $joueur_score_jeux->getIdJeux(),
    'idJoueur'=> $joueur_score_jeux->getIdJoueur(),
    'score'=> $joueur_score_jeux->getScore(),
 ]);
 echo $query->rowcount() . "records UPDATTED SUCCESSFULLY <br>";
}
catch (PDOExeption $e){
$e->getMessage();
}

}

}
?>