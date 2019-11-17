<?php
 class Managerabsence
 {
     /**
      * @var PDO
      */
     private $bdd;
     public function __construct($bdd)
     {
         $this->setBdd($bdd);
     }

     /**
      * @param mixed $bdd
      */
     public function setBdd($bdd)
     {
         $this->bdd = $bdd;
     }

     /**
      * @return mixed
      */
     public function getBdd()
     {
         return $this->bdd;
     }
     public function printAbs(etudiant $etudiant)
     {
    // return $this->bdd->exec('SELECT Matricule, Matiere, Jour FROM ABSENCES WHERE Matricule ='.$etudiant->getMatricule());
         return $this->bdd->query('SELECT Matricule, Matiere, Jour FROM ABSENCES WHERE Matricule ='.$etudiant->getMatricule());
     }


 }
