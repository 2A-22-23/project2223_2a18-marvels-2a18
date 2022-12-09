<?php
////////////////////////////////////////////////////////
class reclamations
{

    private ?string $Sujet = null;
    private ?string $Details = null;

 


 function __construct( $Sujet, $Details)
    {
        $this->Sujet = $Sujet;
        $this->Details= $Details;
       
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
     function getSujet()
    {

       return $this->Sujet;
    } 

      /**
     * Get the value of service price
    
     */
    function getDetails()
    {
       return $this->Details;
    } 
      /**
     * Set the value service name
     *   @return  self
     */

      function setSujet($Sujet)
     {
        $this->Sujet= $Sujet;
     }

      /**
     * Set the value service price
     *   @return  self
     */

      function setDetails($price)
     {
        $this->price= $price;
     }

    }