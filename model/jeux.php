<?php
class jeux
{
    private int $idJeux;
        public function __construct($idJeux) {
            $this->idJeux =$idJeux;
            }
  
    public function getIdJeux():int{
        return $this->idJeux;
    }

    public function setIdJeux(int $idJe):void{
        $this->idJeux = $idJe;
    }
}

?>