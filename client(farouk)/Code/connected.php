<?php
session_start();
if(isset($_SESSION["email"]))
{
echo '<h3>Connection reussite' .$_SESSION["email"].'<h3>';


}




?>
