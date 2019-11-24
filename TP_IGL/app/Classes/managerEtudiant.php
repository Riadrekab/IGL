<?php
class managerEtudiant{


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

public function addEtu( etudiant $etudiant)
{
   $q= $this->bdd->prepare('INSERT INTO etudiants(Matricule,NomEtud,Prenoms) VALUES(:matricule, :nom, :prenom)');
   $q->bindValue(':matricule',$etudiant->getMatricule());
   $q->bindValue('nom',$etudiant->getNom());
   $q->bindValue('prenom',$etudiant->getPrenom());
   $q->execute();
}
}
