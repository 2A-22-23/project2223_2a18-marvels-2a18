<?php
    include '../Controller/piecesc.php';
    include '../Controller/marquec.php';
    $error = "";
    // create client
    $piece = null;
    $marque = null;

    $marquec = new marquec();
    $l=$marquec->l();
    // create an instance of the controller
    $piecec = new piecec();
    if (
        isset($_POST["nom"]) &&
        /* isset($_POST["marque"]) && */
        isset($_POST["description"]) &&
        isset($_POST["prix"]) &&
        isset($_POST["marque"]) &&
        isset($_POST["qte"])
    ) {
        if (
            !empty($_POST['nom']) &&
        /*  !empty($_POST["marque"]) && */
            !empty($_POST["description"]) &&
            !empty($_POST["prix"]) &&
            !empty($_POST["marque"]) &&
            !empty($_POST["qte"])
        ) {
            echo('salam');
            $piece = new piece(
                null,
                $_POST['nom'],
            /*  $_POST['marque'], */
                $_POST['description'],
                $_POST['prix'],
                $_POST['qte'],
                $_POST['marque'])
            ;
            $piecec->addpiece($piece);
            
        header('Location:dashboard.php');  
        } else
            $error = "Missing information";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="dashboard.css">
        <title>Back with piece</title>
    </head>
    <body>
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
                        <a href="da.php">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard.php">
                            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="title">pieces</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard1.php">
                            <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                            <span class="title">marques</span>
                        </a>
                    </li> 
                    <li>
                    <a href="search_marque.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">search</span>
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
            <div class="main">
                <div id="error">
                    <?php echo $error; ?>
                </div>
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
                </div>
                <div class="details">
                    <div class="recentorders">
                        <div class="recentorders">
                            <div class="cardheader">
                                <h2>Ajouter une piece</h2>
                            </div>
                            <form action="" method="POST">
                                <table border="1" align="center">
                                    <tr>
                                        <td>
                                            <label for="nom">nom de la piece:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="nom" id="nom" maxlength="20" placeholder="donner un nom" onkeyup="piece()"  >
                                        </td>
                                         <td><p style="color: red" id="nomEr"></p></td> 
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="description">description:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="description" id="description" maxlength="100" placeholder="donner une description">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="prix">prix:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="number" name="prix" id="prix">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="qte">qte:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="number" name="qte" id="qte">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="marque">marque: </label>
                                        </td>
                                        <td>
                                            <select name="marque" id="marque">
                                                <?php foreach ($l as $marque ){?>
                                                    <option><?= $marque['idmarque']?></option>
                                                <?php }?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <input type="submit" value="Save" class="btn">
                                        </td>
                                        <td>
                                            <input type="reset" value="Reset" class="btn">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>   
                    </div>
                </div>
            </div>
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
                list.forEach((item)=>item.classList.remove('hovered'));
                this.classList.add('hovered')
            }
            list.forEach((item)=>item.addEventListener('mouseover',activeLink));
        </script>
        <script src="validation.js"></script>
    </body>
</html>