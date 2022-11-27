<?php

include '../Controller/piecesc.php';

$error = "";

// create client
$piece = null;

// create an instance of the controller
$piecec = new piecec();
if (
    isset($_POST["idpiece"]) &&
    isset($_POST["nompiece"]) &&
    /* isset($_POST["marque"]) && */
    isset($_POST["description"]) &&
    isset($_POST["prix"]) &&
    isset($_POST["marque"]) &&
    isset($_POST["qte"])
) {
    if (
        !empty($_POST["idpiece"]) &&
        !empty($_POST['nompiece']) &&
       /*  !empty($_POST["marque"]) && */
        !empty($_POST["description"]) &&
        !empty($_POST["prix"]) &&
        !empty($_POST["marque"]) &&
        !empty($_POST["qte"])
    ) {
        $piece = new piece(
            $_POST['idpiece'],
            $_POST['nompiece'],
         /*    $_POST['marque'], */
            $_POST['description'],
            $_POST['prix'],
            $_POST['marque'],
            $_POST['qte']
        );
        $piecec->updatepiece($piece, $_POST["idpiece"]);
        echo "test";
        var_dump($_POST["idpiece"]); 
        header('Location:dashboard.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>Back with client</title>
</head>

<body>
    <!-- <button><a href="Listpieces.php">Back to list</a></button>
    <hr> -->

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idpiece'])) {
        $piece = $piecec->showpiece($_POST['idpiece']);

    ?>
    <style>
        .form{
                float:right;
               margin-right: 600px;
                width:25%;
                height:280px;
                margin-top: 60px;
            }
     </style>

        <form action="" method="POST" class="form">
            <table border="1" align="center" bordercolor="blue">
                <tr>
                    <td>
                        <label for="idpiece">Id de la piece:
                        </label>
                    </td>
                    <td><input readonly type="number" name="idpiece" id="idpiece" value="<?php echo $piece['idpiece']; ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="nompiece"> nom de la piece:
                        </label>
                    </td>
                    <td><input type="text" name="nompiece" id="nompiece" value="<?php echo $piece['nompiece']; ?>" maxlength="20"></td>
                </tr>
               <!--  <tr>
                    <td>
                        <label for="marque">marque:
                        </label>
                    </td>
                    <td><input type="text" name="marque" id="marque" value="php echo $piece['marque']; ?>" maxlength="20"></td>
                </tr> -->
                <tr>
                    <td>
                        <label for="description">description:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="description" value="<?php echo $piece['description']; ?>" id="description" maxlength="100">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="prix" id="prix" value="<?php echo $piece['prix']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="qte">quantite:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="qte" id="qte" value="<?php echo $piece['qte']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="marque">marque:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="marque" id="marque" value="<?php echo $piece['marque']; ?>">
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>

        <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
                        <span class="title">Marvels Auto</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard1.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">client</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard2.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Role</span>
                    </a>
                </li>
             
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sing Out</span>
                    </a>
                </li>
                
            </ul>
        </div>


                                
                          

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script>
    //Menu Toggle
    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector('.navigation');
    let main= document.querySelector('.main');

    toggle.onclick = function(){
        navigation.classList.toggle("active");
        main.classList.toggle("active")
    }

    //adding hoverd class in selected div ! 
    let list =document.querySelectorAll(".navigation li");
    function activeLink(){
        list.forEach((item)=>
        item.classList.remove('hovered'));
        this.classList.add('hovered')
    }
    list.forEach((item)=> 
    item.addEventListener('mouseover',activeLink));
</script>



    <?php
    }
    ?>
</body>


</html>