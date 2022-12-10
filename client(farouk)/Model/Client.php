<?php
class Client
{
    private ?int $id = null;
    private ?string $nom = null;
    private ?string $prenom= null;
    private ?string $email = null;
    private ?string $mdp = null;
    private ?int $telephone = null;
    private ?int $idrole = null;
    public function __construct($id = null, $n, $p, $e, $m,$t,$role="2")
    {
        $this->id = $id;
        $this->nom = $n;
        $this->prenom = $p;
        $this->email = $e;
        $this->mdp = $m;
        $this->telephone = $t;
        $this->idrole=$role;
    }

    
    public function getid()
    {
        return $this->id;
    }


    public function getnom()
    {
        return $this->nom;
    }

    
    public function setnom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

   
    public function getprenom()
    {
        return $this->prenom;
    }

    
    
    public function setprenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getemail()
    {
        return $this->email;
    }

   
    public function setemail($email)
    {
        $this->email = $email;

        return $this;
    }

    
    public function getmdp()
    {
        return $this->mdp;
    }

    
    public function setmdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function gettelephone()
    {
        return $this->telephone;
    }

    
    public function settelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }
    public function getidrole()
    {
        return $this->idrole;
    }

   
    public function setrole()
    {
        $this->idrole = '2';

        return $this;
    }

}
