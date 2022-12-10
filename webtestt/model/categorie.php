<?php
class categorie
{
    public ?int $idcategorie = null;
    public ?string $nom_categorie = null;
    public ?int $nbval = null;
   

    public function __construct($id , $t, $nb)
    {
        $this->idcategorie = $id;
        $this->nom_categorie = $t;
        $this->nbval= $nb;
      
    }

    /**
     * Get the value of idcategorie
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * Get the value of nom_categorie
     */
    public function getnom_categorie()
    {
        return $this->nom_categorie;
    }

    /**
     * Set the value of nom_categorie
     *
     * @return  self
     */
    public function setnom_categorie($nom_categorie)
    {
        $this->nom_categorie = $nom_categorie;

        return $this;
    }

    

    /**
     * Get the value of nbval$nbval
     */
    public function getnbval()
    {
        return $this->nbval;
    }

    /**
     * Set the value of nbval$nbval
     *
     * @return  self
     */
    public function setnbval($nbval)
    {
        $this->nbval = $nbval;

        return $this;
    }

    
}
