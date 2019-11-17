<?php
 class etudiant
 {
 private $Matricule;

     /**
      * @return mixed
      */
     public function getMatricule()
     {
         return $this->Matricule;
     }

     /**
      * @param mixed $Matricule
      */
     public function setMatricule($Matricule)
     {
         $this->Matricule = $Matricule;
     }
 }
