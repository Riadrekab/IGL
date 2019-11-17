<?php

class absence
{
    private $date, $Module, $justifie;

    /**
     * @return mixed
     */
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

    public function hydrate(array $donne)
    {
        foreach ($donne as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}
