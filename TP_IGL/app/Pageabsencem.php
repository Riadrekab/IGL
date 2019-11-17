<?php
require __DIR__.'/Classes/Managerabsence.php';
require __DIR__.'/Classes/etudiant.php';
function getétudiant()
{
    $bdd = new PDO('mysql:host=localhost;dbname=scolaritébdd;charset=utf8', 'root', '');
    //$etudiants_req= $bdd->query('SELECT * FROM etudiants');
    $manager= new Managerabsence($bdd);
    $etudiant=new etudiant();
    $etudiant->setMatricule('2020');
  $tab_req= $manager->printAbs($etudiant);
  $tab_abs=$tab_req->fetchAll;
   // $etudiants=$etudiants_req->fetchAll();
    return  $tab_req;
}
