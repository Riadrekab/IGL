<?php
require __DIR__.'/Classes/Managerabsence.php';
require __DIR__.'/Classes/etudiant.php';
use Illuminate\Database\Seeder;
function getétudiant($username)
{
    /**
     * @var PDO
     */
    $bdd = new PDO('mysql:host=localhost;dbname=scolaritebdd;charset=utf8', 'root', '');
    //$etudiants_req= $bdd->query('SELECT * FROM etudiants');
    $manager= new Managerabsence($bdd);
    $etudiant=new etudiant();
 //   $req=$bdd->query('SELECT Matricule,NomEtud,Prenoms FROM etudiants WHERE NomUser ='.$username);
  //  $username='alger';
  //  $req=DB::table('etudiants')->select('Matricule')->where('NomUser',$username);
   // $req=$bdd->query('SELECT * FROM ETUDIANTS WHERE nomuser ='.$username);

     $donne = DB::table('etudiants')->select('Matricule','NomEtud','Prenoms')->where('NomUser',$username)->get();
    foreach ($donne as $etu) {
        $etudiant->setMatricule($etu->Matricule);
        $etudiant->setNom($etu->NomEtud);
        $etudiant->setPrenom($etu->Prenoms);
        $tab_abs = $manager->printAbs($etudiant);
    }
    //  $etudiants=$etudiants_req->fetchAll();
      return  $tab_abs;
}
