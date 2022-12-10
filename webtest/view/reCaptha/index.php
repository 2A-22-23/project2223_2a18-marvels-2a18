<?php
    // include '../Controller/updatereservations.php';
   require('recaptchaa/autoload.php');
   if(isset($_POST['submitpost'])){
    if(isset($_POST['g-recaptcha-response'])){

      $recaptcha = new \ReCaptcha\ReCaptcha('6LfkrVcjAAAAANaCkPzaDvoE8PyE5ysqJ-gRYx3j');
     $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
   if ($resp->isSuccess()) {
    var_dump('Captcha valide');
    // Verified!
      } else {
          $errors = $resp->getErrorCodes();
          var_dump('Captcha invalide');
          var_dump($errors);
   }
        }else{
           var_dump('captcha non rempli');
       }
    }
   ?>
     <html>
       <head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      </head>
        <body>
    <form  method="POST">
        <div class="g-recaptcha" data-sitekey="6LfkrVcjAAAAAMxHVb3y4jI1aKhBo2gIHp1IrEZq"></div>
        <br/>
         <input type="submit" value="valider" name="submitpost">
        </form>
      </body>
</html>
