
<?php
class lignecommande
{
    public ?int  $idcourse = null;
    public ?string $quantity = null;
    public ?string $idarticle = null;



   

    public function __construct($i, $n, $c)
    {
        $this->idcourse = $i;
        $this->quantity = $n;
        $this->idarticle = $c;
        
        
        
    }

  
}
