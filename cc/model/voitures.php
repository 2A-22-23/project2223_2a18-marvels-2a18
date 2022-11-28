<?php
class voitures
{
    public ?int  $idvoiture = null;
    public ?string $nom_voiture = null;
    public ?string $idcategorie = null;
    public ?string $prix = null;
   

    public function __construct($i,$n,$k,$c)
    {
        $this->idvoiture =$i;
        $this->nom_voiture =$n;
        $this->idcategorie =$k;
        $this->prix =$c;
        
    }
     /**
     * Get the value of idvoiture
     */
    public function getidvoiture()
    {
        return $this->idvoiture;
    }

    /**
     * Get the value of nom_voiture
     */
    public function getnom_voiture()
    {
        return $this->nom_voiture;
    }

    /**
     * Set the value of nom_voiture
     *
     * @return  self
     */
    public function setnom_voiture($nom_voiture)
    {
        $this->nom_voiture = $nom_voiture;

        return $this;
    }
    /**
     * Get the value of $idcategorie
     */
    public function getidcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * Set the value of prix$prix
     *
     * @return  self
     */
    public function setidcategorie($idcategorie)
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }

    

    /**
     * Get the value of prix$prix
     */
    public function getprix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix$prix
     *
     * @return  self
     */
    public function setprix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    
}


  

