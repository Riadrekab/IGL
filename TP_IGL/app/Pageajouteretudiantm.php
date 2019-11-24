
<?php
require __DIR__.'/Classes/etudiant.php';
require __DIR__.'/Classes/managerEtudiant.php';
function AjoutEtuP($matricule,$nom,$prenom,$NomUtil,$Mdp)
{
    $bdd = new PDO('mysql:host=localhost;dbname=scolaritebdd;charset=utf8', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    //$etudiants_req= $bdd->query('SELECT * FROM etudiants');
    $etudiant=new etudiant();
    $donne= array("Matricule"=>$matricule, "Nom"=>$nom, "Prenom"=>$prenom,"NomUtil"=>$NomUtil,"Mdp"=>$Mdp);
    $etudiant->hydrate($donne);
    $manager = new managerEtudiant($bdd);
    return $manager->addEtu($etudiant);
}
