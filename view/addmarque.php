<?php
    include '../Controller/marquec.php';
    $error = "";
    // create client
    $marque = null;
    // create an instance of the controller
    $marquec = new marquec();
    if (
        isset($_POST["marque"]) &&
        isset($_POST["model"]) 
    ) {
        if (
            !empty($_POST['marque']) &&
            !empty($_POST["model"]) 
        ) {
            $marque = new marque(
                null,
                $_POST['marque'],
                $_POST['model'])
            ;
            $marquec->addmarque($marque);
            header('Location:dashboard1.php');  
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
        <title>Back with client</title>
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
                                <h2>Ajouter une marque</h2>
                            </div>
                            <form action="" method="POST"  onsubmit="return (nameValidation());">
                                <table border="1" align="center">
                                    <tr>
                                        <td>
                                            <label for="marque">nom de la marque:
                                            </label>
                                        </td>
                                        <td><input type="text" name="marque" id="marque" placeholder="donner un nom"></td>
                                        <td><p style="color: red" id="nomEr"></p></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="model">nom du model:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="model" id="model"placeholder="donner une description">
                                        </td>
                                        <td><p style="color: red" id="nomErr"></p></td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <input type="submit" value="Save"class="btn">
                                        </td>
                                        <td>
                                            <input type="reset" value="Reset"class="btn">
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
            list.forEach((item)=>
            item.classList.remove('hovered'));
            this.classList.add('hovered')
        }
        list.forEach((item)=> 
        item.addEventListener('mouseover',activeLink));
    </script>
    <script src="validation.js"></script>
    </body>
</html>