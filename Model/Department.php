<?php 
class Department 
{ 
    public ?int $idDep=null;
    public ?string $nameDep=null;
    public ?string $nameServ=null;
} 

public function __construct( $name) 
{
   
    $this->name= $n;
} 


/** Get the value of department id */

public function getIdDep()
{
    return $this->idDep;
} 


/** Get the value of department name*/

public function getNameDep()
{
    return $this->nameDep;
}  

 /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setName($nameDep)
    {
        $this->nameDep= $nameDep;

        return $this;
    } 

    public function getnameServ()
      {

return $this

      } 
      public function setnameServ($nameServ)
      {

$this->nameServ=$nameServ;
return $this;

      }







