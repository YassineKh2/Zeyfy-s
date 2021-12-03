<?php
class jeux
{
    
    private string $question;
    private string $reponseA;
    private string $reponseB;
    private string $reponseC;
    private string $correctAnswer;
    private int $idCours;
    private int $idCategorie;
    private string $reponseD;


        public function __construct($question,$reponseA,$reponseB,$reponseC,$correctAnswer,$idCours,$idCategorie,$reponseD) {
            $this->question=$question;
            $this->reponseA=$reponseA;
            $this->reponseB=$reponseB;
            $this->reponseC=$reponseC;
            $this->correctAnswer=$correctAnswer;
            $this->idCours=$idCours;
            $this->idCategorie=$idCategorie;
            $this->reponseD=$reponseD;
            }
  
    public function getIdJeux():int{
        return $this->idJeux;
    }

    public function setIdJeux(int $idJe):void{
        $this->idJeux = $idJe;
    }

    public function getQuestion():string{
        return $this->question;
    }

    public function setQuestion(string $quest):void{
        $this->question =$quest;
    }
    
        public function setreponseA(string $repA):void{
            $this->reponseA = $repA;
        }

        public function getreponseA():string{
            return $this->reponseA;
        }
        public function setreponseB(string $repB):void{
            $this->reponseB = $repB;
        }

        public function getreponseB():string{
            return $this->reponseB;
        }

        public function setreponseC(string $repC):void{
            $this->reponseC = $repC;
        }

        public function getreponseC():string{
            return $this->reponseC;
        }

        public function setcorrectAnswer(string $cA):void{
            $this->correctAnswer = $cA;
        }

        public function getcorrectAnswer():string{
            return $this->correctAnswer;
        }

        public function getIdCours():int{
            return $this->idCours;
        }
    
        public function setIdCours(int $idC):void{
            $this->idCours=$idC;
        }

        public function getIdCategorie():int{
            return $this->idCategorie;
        }
    
        public function setIdCategorie(int $idCat):void{
            $this->idCategorie = $idCat;
        }
        public function setreponseD(string $repD):void{
            $this->reponseD = $repD;
        }

        public function getreponseD():string{
            return $this->reponseD;
        }
       
    
    
}

?>