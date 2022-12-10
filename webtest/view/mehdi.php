<?php
    include_once '../Controller/piecesc.php';
    $pieceC=new piecec();
    $listepieces=$pieceC->listpieces();

?>
<?php
error_reporting(0);
//Setting session start
session_start();

$total=0;

//Database connection, replace with your connection string.. Used PDO
$conn = new PDO("mysql:host=localhost;dbname=marvels", 'root', '');		
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//get action string
$action = isset($_GET['action'])?$_GET['action']:"";

//Add to cart
if($action=='addcart' && $_SERVER['REQUEST_METHOD']=='POST') {
	
	//Finding the product by code
	$query = "SELECT * FROM piece WHERE qte=:qte";
	$stmt = $conn->prepare($query);
	$stmt->bindParam('qte', $_POST['qte']);
	$stmt->execute();
	$product = $stmt->fetch();
	
	$currentQty = $_SESSION['piece'][$_POST['qte']]['qty']+1; //Incrementing the product qty in cart
	$_SESSION['piece'][$_POST['qte']] =array('qty'=>$currentQty,'name'=>$product['nompiece'],'image'=>$product['url'],'price'=>$product['prix']);
	$product='';
	header("Location:shopping-cart.php");
}

//Empty All
if($action=='emptyall') {
	$_SESSION['piece'] =array();
	header("Location:shopping-cart.php");	
}

//Empty one by one
if($action=='empty') {
	$qte = $_GET['qte'];
	$products = $_SESSION['piece'];
	unset($products[$qte]);
	$_SESSION['piece']= $products;
	header("Location:shopping-cart.php");	
}
if($action=='empty') {
	$qte = $_GET['qte'];
	$products = $_SESSION['piece'];
	unset($products[$qte]);
	$_SESSION['piece']= $products;
	header("Location:shopping-cart.php");	
}


 
 
 //Get all Products
$query = "SELECT * FROM piece";
$stmt = $conn->prepare($query);
$stmt->execute();
$products = $stmt->fetchAll();



//new part


/* //Finding the product by code
$queryy = "SELECT * FROM piece WHERE qte=:qte";
$stmtt = $conn->prepare($queryy);
$stmtt->bindParam('qte', $_POST['qte']);
$stmtt->execute();
$piece = $stmtt->fetch();

$currentQty = $_SESSION['piece'][$_POST['qte']]['qty']+1; //Incrementing the product qty in cart
$_SESSION['piece'][$_POST['qte']] =array('qty'=>$currentQty,'nompiece'=>$piece['nompiece'],'image'=>$piece['url'],'prix'=>$piece['prix']);
$piece='';
header("Location:shopping-cart.php");


//Empty All
if($action=='emptyall') {
$_SESSION['piece'] =array();
header("Location:shopping-cart.php");	
}

//Empty one by one
if($action=='empty') {
$qte = $_GET['qte'];
$piece = $_SESSION['piece'];
unset($piece[$qte]);
$_SESSION['piece']= $piece;
header("Location:shopping-cart.php");	
}
if($action=='empty') {
$qte = $_GET['qte'];
$piece = $_SESSION['piece'];
unset($piece[$qte]);
$_SESSION['piece']= $piece;
header("Location:shopping-cart.php");	
}




//Get all Products
$query = "SELECT * FROM products";
$stmt = $conn->prepare($query);
$stmt->execute();
$products = $stmt->fetchAll();
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP registration form</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="width:600px;">
  <?php if(!empty($_SESSION['piece'])):?>
  <nav class="navbar navbar-inverse" style="background:#04B745;">
    <div class="container-fluid pull-left" style="width:300px;">
      <div class="navbar-header"> <a class="navbar-brand" href="#" style="color:#FFFFFF;">Shopping Cart</a> </div>
    </div>
    <div class="pull-right" style="margin-top:7px;margin-right:7px;"><a href="shopping-cart.php?action=emptyall" class="btn btn-info">Empty cart</a></div>
  </nav>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Actions</th>
      </tr>
    </thead>
    <?php foreach($_SESSION['piece'] as $key=>$product):?>
    <tr>
      <td><img src="<?php print $product['url']?>" width="50"></td>
      <td><?php print $product['nompiece']?></td>
      <td>$<?php print $product['prix']?></td>
      <td><?php print $product['qte']?></td>
      <td><a href="shopping-cart.php?action=empty&qte=<?php print $key?>" class="btn btn-info">Delete</a></td>
    </tr>
    <?php $total = $total+$product['prix'];?>
    <?php endforeach;?>
    <tr><td colspan="5" align="right"><h4>Total:$<?php print $total?></h4></td></tr>

 <!--  //new -->

 <?php foreach($_SESSION['piece'] as $key=>$piece):?>
    <tr>
      <td><img src="<?php print $piece['url']?>" width="50"></td>
      <td><?php print $piece['nompiece']?></td>
      <td>$<?php print $piece['prix']?></td>
      <td><?php print $piece['qte']?></td>
      <td><a href="shopping-cart.php?action=empty&qte=<?php print $key?>" class="btn btn-info">Delete</a></td>
    </tr>
    <?php $total = $total+$piece['prix'];?>
    <?php endforeach;?>
    <tr><td colspan="5" align="right"><h4>Total:$<?php print $total?></h4></td></tr>

<!-- endnew -->




  </table>
  <?php endif;?>
  <!-- <nav class="navbar navbar-inverse" style="background:#04B745;">
    <div class="container-fluid">
      <div class="navbar-header"> <a class="navbar-brand" href="#" style="color:#FFFFFF;">piece</a> </div>
    </div>
  </nav>
  <div class="row">
    <div class="container" style="width:600px;">
      <?php foreach($products as $product):?>
      <div class="col-md-4">
        <div class="thumbnail"> <img src="<?php print $product['url']?>" alt="Lights">
          <div class="caption">
            <p style="text-align:center;"><?php print $product['nompiece']?></p>
            <p style="text-align:center;color:#04B745;"><b>$<?php print $product['prix']?></b></p>
            <form method="post" action="shopping-cart.php?action=addcart">
              <p style="text-align:center;color:#04B745;">
                <button type="submit" class="btn btn-warning">Add To Cart</button>
                <input type="hidden" name="qte" value="<?php print $product['qte']?>">
              </p>
            </form>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div> -->
  </div>
  
</div>



<?php if(!empty($_SESSION['piece'])):?>
  
   <?php endif;?>
  <div class="container" style="width:600px;">
  <nav class="navbar navbar-inverse" style="background:#04B745;">
    <div class="container-fluid">
      <div class="navbar-header"> <a class="navbar-brand" href="#" style="color:#FFFFFF;">Pieces</a> </div>
    </div>
  </nav>
  <div class="row">
    <div class="container" style="width:600px;">
      <?php foreach($listepieces as $piece):?>
      <div class="col-md-4">
        <div class="thumbnail"> <img src="../uploads/<?php print $piece['url']?>" alt="Lights">
          <div class="caption">
            <p style="text-align:center;"><?php print $piece['nompiece']?></p>
            <p style="text-align:center;color:#04B745;"><b>$<?php print $piece['prix']?></b></p>
            <form method="post" action="shopping-cart.php?action=addcart">
              <p style="text-align:center;color:#04B745;">
                <button type="submit" class="btn btn-warning">Add To Cart</button>
                <input type="hidden" name="qte" value="<?php print $piece['qte']?>">
              </p>
            </form>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
  </div>

  <?php if(!empty($_SESSION['piece'])):?>
  
  <?php endif;?>
 
</body>
</html>