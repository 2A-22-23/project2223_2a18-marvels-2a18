<?php
class Piece
{
    private ?int $id = null;
    private ?string $nom = null;
   // private ?string $marque = null;
    private ?string $description = null;
    private ?int $prix = null;
    private ?int $qte = null;
    private ?int $marque = null;
    private ?string $url = null;

    public function __construct($id = null, $n, $d, $p,$q,$m,$url)
    {
        $this->id = $id;
        $this->nom = $n;
        /* $this->marque = $m; */
        $this->description = $d;
        $this->prix = $p;
        $this->qte = $q;
        $this->marque = $m;
        $this->url = $url;
    }

    /**
     * Get the value of id
     */
    public function getid()
    {
        return $this->id;
    }

    /**
     * Get the value of Name
     */
    public function getName()
    {
        return $this->nom;
    }

    /**
     * Set the value of Name
     *
     * 
     */
    public function setName($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of marque
     */
    /* public function getmarque()
    {
        return $this->marque;
    } */

    /**
     * Set the value of marque
     *
     * 
     */
   /*  public function setmarque($marque)
    {
        $this->marque = $marque;

        return $this;
    } */

    /**
     * Get the value of description
     */
    public function getdescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setdescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getprix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * 
     */
    public function setprix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
    /**
     * Get the value of qte
     */
    public function getqte()
    {
        return $this->qte;
    }

    /**
     * Set the value of qte
     *
     * 
     */
    public function setqte($qte)
    {
        $this->qte = $qte;

        return $this;
    }
    public function getmarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of qte
     *
     * 
     */
    public function setmarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }
    public function geturl()
    {
        return $this->url;
    }

    /**
     * Set the value of qte
     *
     * 
     */
    public function seturl($url)
    {
        $this->url = $url;

        return $this;
    }



}
