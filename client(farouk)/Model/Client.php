<?php
class Client
{
    private ?int $id = null;
    private ?string $nom = null;
    private ?string $prenom= null;
    private ?string $email = null;
    private ?string $mdp = null;
    private ?int $telephone = null;
    public function __construct($id = null, $n, $p, $e, $m,$t)
    {
        $this->id = $id;
        $this->nom = $n;
        $this->prenom = $p;
        $this->email = $e;
        $this->mdp = $m;
        $this->telephone = $t;
    }

    /**
     * Get the value of idClient
     */
    public function getid()
    {
        return $this->id;
    }

    /**
     * Get the value of lastName
     */
    public function getnom()
    {
        return $this->nom;
    }

    /**
     * Set the value of lastName
     *
     * 
     */
    public function setnom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getprenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of firstName
     *
     * 
     */
    public function setprenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getemail()
    {
        return $this->email;
    }

    /**
     * Set the value of address
     *
     * 
     */
    public function setemail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getmdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of dob
     *
     *
     */
    public function setmdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }
/**
     * Get the value of dob
     */
    public function gettelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of dob
     *
     * 
     */
    public function settelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }


}
