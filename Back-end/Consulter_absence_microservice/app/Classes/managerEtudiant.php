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
        $stmt = $this->bdd->prepare("SELECT * FROM etudiants WHERE Matricule=:matricule");
        $stmt->execute(['matricule' => $etudiant->getMatricule()]);
        if ($stmt->rowCount() == 0) {

            $q = $this->bdd->prepare('INSERT INTO etudiants(Matricule,NomEtud,Prenoms,NomUser,PassWord) 
        VALUES(:matricule, :nom, :prenom,:NomUtil,:Mdp)');
            $q->bindValue(':matricule', $etudiant->getMatricule());
            $q->bindValue('nom', $etudiant->getNom());
            $q->bindValue('prenom', $etudiant->getPrenom());
            $q->bindValue('NomUtil', $etudiant->getNomUtil());
            $q->bindValue('Mdp', $etudiant->getMdp());
            $q->execute();
            return 'Ajout réussi';
        }
    }
}
