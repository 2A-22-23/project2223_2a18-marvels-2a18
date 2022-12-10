<?php
    include '../Controller/marquec.php';
    $marquec = new marquec();

    if (isset($_GET['nommarque']) && !empty($_GET['nommarque'])) {
        $list = $marquec->showmarquee($_GET['nommarque']);
    } else {
        $list = $marquec->listmarquee();
    }
?>
<!DOCTYPE html>
<html>
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
                        <a href="MainDashboard.php">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                    <a href="dashboardc2.php">
                            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="title">pieces</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboardc3.php">
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
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>         
                </div>
                <div class="details">
                    <div class="recentorders">
                        <div class="recentorders">
                            <div class="cardheader">
                                <h2>List of marques</h2>
                            </div>
                            <form action="" method="GET" >
                                <input type="text" name="nommarque" id="nommarque" placeholder="Enter marque name"  >
                                <input type="submit" value="Search"class="btn">
                            </form>
                            <table border="1" align="center" width="70%" bordercolor="red">
                                <tr>
                                    <th>Id marque</th>
                                    <th>nommarque</th>
                                    <th>nommodel</th>
                                </tr>
                                <?php foreach ($list as $marque) {?>
                                <tr>
                                    <td><?= $marque['idmarque']; ?></td>
                                    <td><?= $marque['nommarque']; ?></td>
                                    <td><?= $marque['nommodel']; ?></td>
                                </tr>
                                <?php } ?>
                            </table>
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
    </body>
</html>