<?php
namespace App\Classes;
class absence
{
    public $Date, $Module, $Justifie,$Matricule;

    /**
     * @param mixed $Matricule
     */
    public function setMatricule($Matricule)
    {
        $this->Matricule = $Matricule;
    }
    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    public function getMatricule()
    {
        return $this->Matricule;
    }

    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getModule()
    {
        return $this->Module;
    }

    /**
     * @return mixed
     */
    public function getJustifie()
    {
        return $this->justifie;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param mixed $justifie
     */
    public function setJustifie($justifie)
    {
        $this->justifie = $justifie;
    }

    /**
     * @param mixed $Module
     */
    public function setModule($Module)
    {
        $this->Module = $Module;
    }

    public function hydrate($donne)
    {
     $this->setMatricule($donne->Matricule);
     $this->setDate($donne->Jour);
     $this->setJustifie($donne->justifie);
      $this->setModule($donne->Matiere);
    }
}
