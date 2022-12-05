<?php
////////////////////////////////////////////////////////
class reponses
{

    private ?string $id = null;
    private ?string $Reponse = null;

 


 function __construct( $id, $Reponse)
    {
        $this->id = $id;
        $this->Reponse= $Reponse;
       
    }

    /**
     * Get the value of service IdRep
     */

      function getIdService()
     {
        return $this->IdRep;
     } 

      /**
     * Get the value of service name
    
     */
     function getSujet()
    {

       return $this->id;
    } 

      /**
     * Get the value of service price
    
     */
    function getDetails()
    {
       return $this->Reponse;
    } 
      /**
     * Set the value service name
     *   @return  self
     */

      function setSujet($id)
     {
        $this->id= $id;
     }

      

    }