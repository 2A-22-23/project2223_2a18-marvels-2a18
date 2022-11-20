
<?php
class commande
{
    public ?int  $idcommande = null;
    public ?string $nom_voiture = null;
    public ?string $prix = null;
   

    public function __construct($i, $n, $c)
    {
        $this->idcommande = $i;
        $this->nom_voiture = $n;
        $this->prix = $c;
        
    }

  
}
