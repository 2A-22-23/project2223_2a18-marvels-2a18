
<?php
class role
{
    public ?int  $idrole = null;
    public ?string $role= null;
    //public ?int $idclient = null;
   

    public function __construct($i, $n) //, $c
    {
        $this->idrole = $i;
        $this->role = $n;
       // $this->idclient = $c;
        
    }

  
}
