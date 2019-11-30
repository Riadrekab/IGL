<?php
namespace App\classes;
class etudiant
{
     private $Matricule, $Nom, $Prenom,$nomUtil,$Mdp;


    public function hydrate(array $donne)
    {
        $this->setMatricule($donne['Matricule']);
        $this->setNom($donne['Nom']);
        $this->setPrenom($donne['Prenom']);
        $this->setNomUtil($donne['NomUtil']);
        $this->setMdp($donne['Mdp']);
    }

    public function hydrate2(array $donne)
    {
        foreach ($donne as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * @param mixed $Mdp
     */
    public function setMdp($Mdp)
    {
        $this->Mdp = $Mdp;
    }
    /**
     * @param mixed $nomUtil
     */
    public function setNomUtil($nomUtil)
    {
        $this->nomUtil = $nomUtil;
    }

    /**
     * @return mixed
     */
    public function getNomUtil()
    {
        return $this->nomUtil;
    }
    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->Mdp;
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
