<?php 
class Department 
{ 
    public ?int $idDep=null;
    public ?string $nameDep=null;

 

public function __construct($nameDep) 
{
   
    $this->nameDep= $nameDep;

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
     * Set the value of department name
     *
     * @return  self
     */
    public function setName($nameDep)
    {
        $this->nameDep= $nameDep;

        return $this;
    }  
 


   
     

}




