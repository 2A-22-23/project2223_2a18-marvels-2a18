<?php 
require 'C:\xampp\htdocs\webtest\model\DB.php';
$DB= new DB();
?>


<!DOCTYPE html>
<html lang="en"> 
    <head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=""width=device-width, initial-scale="1.0">
    <title> Document</title> 
</head> 
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<!--fonts-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<!--custom css file link--> 
<link rel="stylesheet" href="../Front main page/style.css"> 


<body>





<!--header section starts-->
<header class="header"> 


<div id="menu-btn" class="fas fa-bars"></div>
<a href="#"class="logo"> 
  
   
      
    <span>Marvels</span>Auto </a> 
 <nav class="navbar">
<a href="../../../fatma/FRONT/view/index.php"> Home </a>
<a href="..\..\front\spare_parts.php"> Spare parts </a>
<a href="#vehicles"> Vehicles </a>
<a href="#services">Departments</a>


 </nav>

<div id="login-btn"> 
    <button class="btn">Login</button>
    <i class="far fa-user"></i>
</div>
<form action="..\view\sheet.php">
    <button  style="font-size:24px">CART <i class="fa fa-shopping-cart"></i></button>
    </form>



</header>

<style>
.content {
  max-width: 500px;
  margin: auto;
  margin-top:120px;
}
</style>
<body>
<!--Service menu-->
<section class="services menu" id="services menu">
  

 
<?php $service = $DB->query('SELECT * from services WHERE idDep=idDep ') ?>
<table>
      <?php foreach ($service as $services ) { ?>

        <div class="swiper-slide box">
                            
                            <div class="content">
                            
                                <h3> <?php echo $services->nameServ; ?></h3>
                                <div class="price"> <span>Price : </span> <?php echo $services->price; ?> <span> DT </span> </div>
                                <p>
                               
                                </p>
                                <a href="../addCommandeJS2.php" class="btn">check out</a>
                            </div>
                        </div>
                
<?php
 }
?>  
 </table>

</section><br><br><br><br><br><br<br><br><br<br><br><br><br><br><br><br><br>
 <section class="footer" id="footer">

<div class="box-container">

    <div class="box">
        <h3>Our branches</h3>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
        
        <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
        
        <a href="#"> <i class="fas fa-map-marker-alt"></i> Tunisia </a>
    </div>

    <div class="box">
        <h3>quick links</h3>
        <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +216 71 852 326</a>
        <a href="#"> <i class="fas fa-phone"></i> +216 58 796 413</a>
        <a href="#"> <i class="fas fa-envelope"></i> Marvels.Auto@gmail.com </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> El Ghazela, Tunisia, 1005</a>
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
    </div>

</div>

</section>

</body>

</html>



