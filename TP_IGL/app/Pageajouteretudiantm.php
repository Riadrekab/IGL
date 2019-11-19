<?php
require __DIR__.'/Classes/etudiant.php';
require __DIR__.'/Classes/managerEtudiant.php';

function AjoutEtuP()
{
    $bdd = new PDO('mysql:host=localhost;dbname=scolaritébdd;charset=utf8', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    //$etudiants_req= $bdd->query('SELECT * FROM etudiants');
    $etudiant=new etudiant();
    $donne= array("Matricule"=>'123132', "Nom"=>"WAW", "Prenom"=>"Riad");
    $etudiant->hydrate($donne);
    $manager = new managerEtudiant($bdd);
    $manager->addEtu($etudiant);

    return ;
}
