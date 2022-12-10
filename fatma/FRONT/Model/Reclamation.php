<?php
////////////////////////////////////////////////////////
class reclamations
{

    
    private ?string $Details = null;
    private ?string $IdClient = null;
    private ?string $Email = null;

 


 function __construct( $Details, $IdClient, $Email)
    {
        $this->Details= $Details;
        $this->IdClient= $IdClient;
        $this->Email = $Email;
       
    }

    /**
     * Get the value of service id
     */

      function getIdService()
     {
        return $this->id;
     } 

     
      /**
     * Get the value of details recalamations
    
     */
    function getDetails()
    {
       return $this->Details;
    }
    /**
     * Get the value of id client
    
     */
    function getIdClient()
    {
       return $this->IdClient;
    }  

    /**
     * Get the value of email
    
     */
    function getEmail()
    {
       return $this->Email;
    }  

     

      /**
     * Set the value details reclamation
     *   @return  self
     */

      function setDetails($Details)
     {
        $this->Details= $Details;
     }

      /**
     * Set the value id client
     *   @return  self
     */

    function setIdClient($IdClient)
    {
       $this->IdClient= $IdClient;
    }

     /**
     * Set the value email
     *   @return  self
     */

    function setEmail($Email)
    {
       $this->Email= $Email;
    }

    }