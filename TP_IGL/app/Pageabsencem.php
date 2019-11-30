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
    $manager= new Managerabsence(NULL);
    $etudiant=new etudiant();
     $donne = DB::table('etudiants')->select('Matricule','NomEtud','Prenoms')->where('NomUser',$username)->get();
    foreach ($donne as $etu) {
        $etudiant->setMatricule($etu->Matricule);
        $etudiant->setNom($etu->NomEtud);
        $etudiant->setPrenom($etu->Prenoms);
        $tab_abs = $manager->printAbs($etudiant);
    }

      return  $tab_abs;
}
