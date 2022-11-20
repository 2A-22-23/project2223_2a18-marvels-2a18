<center>
<table border="1" bordercolor="#fd2600" align="center" width="30%">

    <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>role</th>
</tr>
<?php
$connect=mysqli_connect("localhost","root","","user")or die("connection failed");
$query="select str.nom,str.prenom,sr.role from user str, role sr where str.idc=sr.idclient";
$result=mysqli_query($connect,$query);
while ($row=mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['nom'] ?></td>
    <td><?php echo $row['prenom'] ?></td>
    <td><?php echo $row['role'] ?></td>
</tr>
<?php
}
?>
</center>