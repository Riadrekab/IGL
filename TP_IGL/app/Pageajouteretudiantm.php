<?php
require __DIR__.'/Classes/etudiant.php';
require __DIR__.'/Classes/managerEtudiant.php';

function AjoutEtuP($matricule,$nom,$prenom)
{
    $bdd = new PDO('mysql:host=localhost;dbname=scolaritébdd;charset=utf8', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    //$etudiants_req= $bdd->query('SELECT * FROM etudiants');
    $etudiant=new etudiant();
    $donne= array("Matricule"=>$matricule, "Nom"=>$nom, "Prenom"=>$prenom);
    $etudiant->hydrate($donne);
    $manager = new managerEtudiant($bdd);
    return $manager->addEtu($etudiant);


}
