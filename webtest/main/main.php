
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
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

<!--custom css file link--> 
<link rel="stylesheet" href="style.css"> 

<body>

<!--header section starts-->
<header class="header"> 


<div id="menu-btn" class="fas fa-bars"></div>
<a href="#"class="logo"> 
  
   
      
    <span>Marvels</span>Auto </a> 
 <nav class="navbar">
<a href="#home"> Home </a>
<a href="..\front\spare_parts.php"> Spare parts </a>
<a href="#vehicles"> Vehicles </a>
<a href="#services">Departments</a>
<a href="..\view\addCommandeJS.php"> Add Commande</a>
<a href="..\view\MainDashboard.php"> Dashboard </a>

 </nav>

<div id="login-btn"> 
    <button class="btn">Login</button>
    <i class="far fa-user"></i>
</div>
<form action="..\view\shopping-cart.php">
    <button  style="font-size:24px">CART <i class="fa fa-shopping-cart"></i></button>
    </form>



</header>
<!--header section ends-->


<!--login form--> 
  <div class="login-form-container"> 

    <span class="fas fa-times"id="close-login-form"></span>
<form action="">

    <h3> user login</h3> 
    <input type="email" placeholder="email" class="box">
    <input type="password" placeholder="password" class="box">
    <p> Forgot your password <a href='#'> Click here</a></p>
    <input type="submit" value="Login now" class="btn">
    <p> or login with </p>
    <div class="buttons">
        <a href="#" class="btn"> google</a>
        <a href="#" class="btn">Facebook</a>
    </div>
    <p> Don't have an account? <a href="#" >Create one</a></p>

</form>


  </div>

  <!--Home page begins-->

<section class="home" id="home">
<h1 class="home-parallax" data-speed="-2"> Find your new car or repair your old one</h1>

<!--<img  class="home-parallax" data-speed="5" src="home.jpg" alt=""> </img>
<a href="#" class="btn home-parallax" data-speed="7"> Explore more </a>-->
<div class="row">
    <div class="column">
      <img src="car1.jpg"  style="width:550px;height:500px">
    </div>
    <div class="column">
      <img src="logo.png" style="width:600px;height:500px">
    </div>
    <div class="column">
      <img src="man.jpg" style="width:550px;height:500px">
    </div>
  </div>
  <a data-speed="7" href="#" class="btn home-parallax">Find more</a>
</section> 

  <!--home page ends--> 
   <!--icons section-->
   <section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>150+</h3>
            <p>branches</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>4770+</h3>
            <p>cars sold</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>320+</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>1500+</h3>
            <p>new cars</p>
        </div>
    </div>

</section>

<!--icons section ends-->
<!--vehicles section-->
<section class="vehicles" id="vehicles">

    <h1 class="heading"> popular <span>vehicles</span> </h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="vehicle-1.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> $62,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="vehicle-2.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> $62,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="vehicle-3.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> $62,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="vehicle-4.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> $62,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide  box">
                <img src="vehicle-5.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> $62,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="vehicle-6.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> $62,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section> 


<!--vehicles section end-->

<!--service section-->


<section class="services" id="services">
<h1 class="heading"> our <span> departments </span> </h1>
<?php $department = $DB->query('SELECT * from department') ?>
      <?php foreach ($department as $department ) { ?>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-car" <?php echo $department->idDep; ?>></i>
            <h3><?php echo $department->nameDep; ?></h3>
            <p> <?php echo $department->description; ?></p>
            <a href="../view/front/ServiceDep.php" class="btn"> read more</a>
        </div>
        <?php }?>
        </div>

</section> 

<!--services secrtion ends-->

<!--newsletter-->
<section class="newsletter">
    
    <h3>subscribe for latest updates</h3>
    <p>You don't want to miss our discounts, and the events we plan that will surely interest you.</p>

   <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="subscribe">
   </form>

</section>

<!--newsletter ends-->
<section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us</h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1632137920043!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

        <form action="">
            <h3>get in touch</h3>
            <input type="text" placeholder="your name" class="box">
            <input type="email" placeholder="your email" class="box">
            <input type="tel" placeholder="subject" class="box">
            <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

    </div>

</section>

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

    <!-- custom js link-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="script.js"> </script>

</body>

</html>