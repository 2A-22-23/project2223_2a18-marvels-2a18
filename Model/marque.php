<?php
class marque
{
    private ?int $idm = null;
    private ?string $marque = null;
    private ?string $model = null;

    public function __construct($idm = null, $ma,$mo)
    {
        $this->idm = $idm;
        $this->marque = $ma;
        $this->model = $mo;
    }

    /**
     * Get the value of id
     */
    public function getidm()
    {
        return $this->idm;
    }

    
    public function getmarque()
    {
        return $this->marque;
    }

    
    public function setmarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    
    public function getmodel()
    {
        return $this->model;
    }

    
    public function setmodel($model)
    {
        $this->model = $model;

        return $this;
    }
}