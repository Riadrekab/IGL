<?php
//require __DIR__.'/etudiant.php';

require __DIR__.'/absence.php';
//require __DIR__.'/Classes/etudiant.php';
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
   // $tab_req =$this->bdd->exec('SELECT Matricule, Matiere, Jour FROM ABSENCES WHERE Matricule ='.$etudiant->getMatricule());

    $tab_abs=[];
    echo $mat=$etudiant->getMatricule();
    //$tab_req= $this->bdd->query('SELECT Matricule, Matiere, Jour , justifie FROM ABSENCES WHERE Matricule = '.$mat);
       $tab_req=DB::table('absences')->select('Matricule','Matiere','Jour','justifie')->where('Matricule',$mat)->get();
        // if ($tab_req->rowCount()==0){echo 'MAAAAAAAAAAAAAAA';}
         //while ($abs=$tab_req->fetch(PDO::FETCH_ASSOC))
        foreach ($tab_req as $abs)
    {
        echo 'yoooo1';
          $temp_abs=new absence();
          $temp_abs->hydrate($abs);
        //$temp_abs->setMatricule($abs['Matricule']);
          $tab_abs[]=$temp_abs;
    }
    return $tab_abs;
     }


 }
