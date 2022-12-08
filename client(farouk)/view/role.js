var numbers =/^[1-9]+$/;
         var letters = /^[A-Za-z]+$/;
         var pass =/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/
         // Form validation code will come here.
         function validate() {
         
            if( document.myForm.role.value == "" ) {
               alert( "Veuillez remplir le role!" );
             
               document.myForm.role.focus() ;
               return false;
            }
            if( !document.myForm.role.value.match(letters) ) {
               alert( "le role doit ne contenir que des lettres!" );
           
               document.myForm.role.focus() ;
               return false;
            }

            if( document.myForm.idrole.value == "" ) {
               alert( "Veuillez remplir le id " );
             
               document.myForm.idrole.focus() ;
               return false;
            }
            if( !document.myForm.idrole.value.match(numbers) ) {
               alert( "id doit ne contenir que des chiffres!" );
           
               document.myForm.idrole.focus() ;
               return false;
            }
           
            
         }