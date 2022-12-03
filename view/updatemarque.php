<?php

include '../Controller/marquec.php';

$error = "";

// create client
$marque = null;

// create an instance of the controller
$marquec = new marquec();
if (
    isset($_POST["idmarque"]) &&
    isset($_POST["nommarque"]) &&
    isset($_POST["nommodel"])
) {
    if (
        !empty($_POST["idmarque"]) &&
        !empty($_POST['nommarque']) &&
        !empty($_POST["nommodel"])
    ) {
        $marque = new marque(
            $_POST['idmarque'],
            $_POST['nommarque'],
            $_POST['nommodel']
        );
        $marquec->updatemarque($marque, $_POST["idmarque"]);
        echo "test";
        var_dump($_POST["idmarque"]); 
        header('Location:dashboard1.php');
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
    <title>Back with mo</title>
</head>

<body>
    <!-- <button><a href="Listmarque.php">Back to list</a></button>
    <hr> -->

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idmarque'])) {
        $marque = $marquec->showmarque($_POST['idmarque']);

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
            <table border="1" align="center" bordercolor="red">
                <tr>
                    <td>
                        <label for="idmarque">Id de la marque:
                        </label>
                    </td>
                    <td><input readonly type="number" name="idmarque" id="idmarque" value="<?php echo $marque['idmarque']; ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="nommarque"> nom de la marque:
                        </label>
                    </td>
                    <td><input type="text" name="nommarque" id="nommarque" value="<?php echo $marque['nommarque']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nommodel">nom du model:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nommodel" value="<?php echo $marque['nommodel']; ?>" id="nommodel" maxlength="100">
                    </td>
                </tr>
                <tr>
                    
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