<?php
$error = "";
include '../Controller/ClientC.php';
$user = null;
 $userC = new ClientC();
 session_start() ;
 if(isset($_POST['button'])){ 
    if(empty($_POST["email"]) || empty($_POST["mdp"])   )
{
    $error='<label>Veuillez remplir tout les champs</label>';


}
else {
    if(isset($_POST['email'])  && isset($_POST['mdp'])) { 
        $user = $userC->showuser1($_POST['email'],$_POST['mdp']);
        $test=null;
        $test=$userC->showuser2($_POST['email'],$_POST['mdp']);
        $num_ligne =$test->rowCount();  
        if($num_ligne > 0){  
            if($user["idrole"] ==1){
                $_SESSION["email"]=$user["email"];
                header("location: ../view/dashboard.php");
            }
            else {
                $_SESSION["email"]=$user["email"];
                header("location: indexx.php");
            } 
            $error = "";  }
            else {
                $error = "EMAIL ou  Mot de passe incorrect !";
            }     
        } 
    }
}
    
    
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connection</title>
    <link rel="stylesheet" href="style.css">
    <style>

body{
  width: 100%;
  height: 100vh;
  background: linear-gradient(
    to right,
    #DD5353 0%,
    #DD5353 50%,
    #DD5353 50%,
   black 100%
  );
}
.inscription-form label{
  font-size: 20px;

}
</style>
  </head>
  <body>
     
    <div class="inscription-form">
    <div id="error">
        <?php echo $error; ?>
    </div>

    <form onsubmit="return nameValidation()"  action="" method="POST" name='inscription-form' id='myForm'>
   <!--  <label>Email:</label> -->
    <input type="email" name="email"   placeholder="Email" class="box" title="*****@***.**"  ><br></br>
    <!-- <label>Mot de passe:</label> -->
    <input type="password" name="mdp"  placeholder="Mot de passe" class="box" title ="numero/majuscule/miniscule et au moins 8 caracteres"  ><br></br>
   
    <input type="submit" value="Connecter" name="button">


  </form> 
  </div>
 
  

</body>
</html>