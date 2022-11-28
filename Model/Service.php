<?php
class services
{

    public ?string $nameServ = null;
    public ?float $price = null;
    public ?string $nameDep=null;

   
 


 function __construct( $nameDep,$nameServ, $price, )
    {
      $this->namedDep=$nameDep;
        $this->nameServ = $nameServ;
        $this->price= floatval($price);
       
    }

    /**
     * Get the value of service id
     */

      function getIdService()
     {
        return $this->id;
     } 

      /**
     * Get the value of service name
    
     */
     function getNameServices()
    {

       return $this->nameServ;
    } 

      /**
     * Get the value of service price
    
     */
    function getServicePrice()
    {
       return $this->price;
    } 
      /**
     * Set the value service name
     *   @return  self
     */
    function getDepName()


    {
      return $this->nameDep;
    }
      function setServiceName($nameServ)
     {
        $this->nameServ= $nameServ;
     }

      /**
     * Set the value service price
     *   @return  self
     */

      function setServicePrice($price)
     {
        $this->price= $price;
     }
     function setDepName()
     {
$this->nameDep=$nameDep;

     }
    }