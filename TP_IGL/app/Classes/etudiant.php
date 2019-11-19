<?php
 class etudiant
 {
 private $Matricule,$Nom,$Prenom;



 public  function hydrate (array $donne)
 {
     foreach ($donne as $key => $value) {
         $method = 'set' . ucfirst($key);
         if (method_exists($this, $method)) {
             $this->$method($value);
         }
     }
 }


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

     /**
      * @param mixed $Nom
      */
     public function setNom($Nom)
     {
         $this->Nom = $Nom;
     }

     /**
      * @param mixed $Prenom
      */
     public function setPrenom($Prenom)
     {
         $this->Prenom = $Prenom;
     }

     /**
      * @return mixed
      */
     public function getNom()
     {
         return $this->Nom;
     }

     /**
      * @return mixed
      */
     public function getPrenom()
     {
         return $this->Prenom;
     }
 }
