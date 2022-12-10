<?php
class commande
{
    public ?int  $idcommande = null;
    public ?string $addresse = null;
    public ?string $date = null;
    public ?int  $idp = null;
    public ?int  $idv = null;
    public ?int  $ids = null;
    
    public function __construct($i=null, $n, $c,$idp,$idv,$ids)
    {
        $this->idcommande = $i;
        $this->addresse = $n;
        $this->date = $c;
        $this->idp = $idp;
        $this->idv = $idv;
        $this->ids = $ids;
    }

  
}