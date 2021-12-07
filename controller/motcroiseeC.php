<?php
include_once 'C:\xampp\htdocs\educaplay\config.php';
include_once 'C:\xampp\htdocs\educaplay\model\motcroisee.php';

class motcroiseeC{

    function affichermotcroisee(){
        $sql="SELECT * FROM motcroisse";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMessage());
        }
    }

    function ajoutermot($motcroisse){

        $sql = "INSERT INTO motcroisse (l1, indice1, l2, indice2,l3,indice3,l4,indice4,l5,indice5,l6,indice6,l7,indice7,l8,indice8,l9,indice9,l10,indice10,l11,indice11,l12,indice12,l13,indice13,l14,indice14,l15,indice15,l16,indice16)
                  VALUES (:l1, :indice1, :l2, :indice2,:l3,:indice3,:l4,:indice4,:l5,:indice5,:l6,:indice6,:l7,:indice7,:l8,:indice8,:l9,:indice9,:l10,:indice10,:l11,:indice11,:l12,:indice12,:l13,:indice13,:l14,:indice14,:l15,:indice15,:l16,:indice16)";
     $db = config::getConnexion();                 
     try{
         $query = $db->prepare($sql);
         $query->execute([
             'l1'=> $jeux->getl1(),
             'indice1'=>$jeux->getindice1(),
             'l2'=>$jeux->getl2(),
             'indice2'=>$jeux->getindice2(),
             'l3'=>$jeux->getl3(),
             'indice3'=>$jeux->getindice3(),
             'l4'=>$jeux->getl4(),
             'indice4'=>$jeux->getindice4(),
             'l5'=> $jeux->getl5(),
             'indice5'=>$jeux->getindice5(),
             'l6'=>$jeux->getl6(),
             'indice6'=>$jeux->getindice6(),
             'l7'=>$jeux->getl7(),
             'indice7'=>$jeux->getindice7(),
             'l8'=>$jeux->getl8(),
             'indice8'=>$jeux->getindice8(),
             'l9'=> $jeux->getl9(),
             'indice9'=>$jeux->getindice9(),
             'l10'=>$jeux->getl10(),
             'indice10'=>$jeux->getindice10(),
             'l11'=>$jeux->getl11(),
             'indice11'=>$jeux->getindice11(),
             'l12'=>$jeux->getl2(),
             'indice12'=>$jeux->getindice12(),
             'l13'=> $jeux->getl13(),
             'indice13'=>$jeux->getindice13(),
             'l14'=>$jeux->getl14(),
             'indice14'=>$jeux->getindice14(),
             'l15'=>$jeux->getl15(),
             'indice15'=>$jeux->getindice15(),
             'l15'=>$jeux->getl5(),
             'indice16'=>$jeux->getindice16()
         ]);
         

 } catch (Exception $e){
     $e->getMessage();
 }
 
     }



}