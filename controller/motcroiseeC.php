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
             'l1'=> $motcroisse->getl1(),
             'indice1'=>$motcroisse->getindice1(),
             'l2'=>$motcroisse->getl2(),
             'indice2'=>$motcroisse->getindice2(),
             'l3'=>$motcroisse->getl3(),
             'indice3'=>$motcroisse->getindice3(),
             'l4'=>$motcroisse->getl4(),
             'indice4'=>$motcroisse->getindice4(),
             'l5'=> $motcroisse->getl5(),
             'indice5'=>$motcroisse->getindice5(),
             'l6'=>$motcroisse->getl6(),
             'indice6'=>$motcroisse->getindice6(),
             'l7'=>$motcroisse->getl7(),
             'indice7'=>$motcroisse->getindice7(),
             'l8'=>$motcroisse->getl8(),
             'indice8'=>$motcroisse->getindice8(),
             'l9'=> $motcroisse->getl9(),
             'indice9'=>$motcroisse->getindice9(),
             'l10'=>$motcroisse->getl10(),
             'indice10'=>$motcroisse->getindice10(),
             'l11'=>$motcroisse->getl11(),
             'indice11'=>$motcroisse->getindice11(),
             'l12'=>$motcroisse->getl2(),
             'indice12'=>$motcroisse->getindice12(),
             'l13'=> $motcroisse->getl13(),
             'indice13'=>$motcroisse->getindice13(),
             'l14'=>$motcroisse->getl14(),
             'indice14'=>$motcroisse->getindice14(),
             'l15'=>$motcroisse->getl15(),
             'indice15'=>$motcroisse->getindice15(),
             'l16'=>$motcroisse->getl5(),
             'indice16'=>$motcroisse->getindice16(),
             'IDJEUX'=>$motcroisse->getIDJEUX()
         ]);
         

 } catch (Exception $e){
     $e->getMessage();
 }
 
     }



}