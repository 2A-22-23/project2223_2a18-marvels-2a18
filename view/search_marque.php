<?php
include '../controller/marquec.php';
$marquec = new marquec();

if (isset($_GET['nommarque']) && !empty($_GET['nommarque'])) {
    $list = $marquec->showmarquee($_GET['nommarque']);
} else {
    $list = $marquec->listmarquee();
}
?>
<html>

<head></head>

<body>

    <div>
        <form action="" method="GET">
            <input type="text" name="nommarque" id="nommarque" placeholder="Enter marque name">
            <input type="submit" value="Search">
        </form>
    </div>

    <center>
        <h1>List of marques</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id marque</th>
            <th>nommarque</th>
            <th>nommodel</th>
        </tr>
        <?php
        foreach ($list as $marque) {
        ?>
            <tr>
                <td><?= $marque['idmarque']; ?></td>
                <td><?= $marque['nommarque']; ?></td>
                <td><?= $marque['nommodel']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>