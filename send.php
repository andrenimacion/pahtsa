<?php

session_start();
$usuario = $_SESSION['id'];

include 'cn.php';

$name = $_REQUEST['name'];
$datos = $_REQUEST['datos'];
$precio = $_REQUEST['precio'];
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
$stock = $_REQUEST['stock'];

mysqli_query($cn,"insert into productos(idUser, name, data, precio,stock,file) values 
                       ('$usuario','$name', '$datos', '$precio', '$stock', '$Imagen')")
 or die("Problemas en el select".mysqli_error($cn));
header('location: index.php');
mysqli_close($cn);

?>