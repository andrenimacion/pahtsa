<?php
/*
session_start();
$usuario = $_SESSION['id'];
*/
include 'cn.php';

$nombreJoyas = $_REQUEST['nombreJojas'];
$kilatesJoyas = $_REQUEST['kilates'];
$pesoJoyas = $_REQUEST['pJoyas'];
$imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
$pvpJoyas = $_REQUEST['pvp'];
$valorInternoJoyas = $_REQUEST['valInJo'];


mysqli_query($cn,"insert into joyaDb(nombreJojas, kilatesJoyas, pesoJoyas, valorInternoJoyas, pvpJoyas, imagen) values 
                       ('$nombreJoyas','$kilatesJoyas', '$pesoJoyas', '$valorInternoJoyas', '$pvpJoyas', '$imagen')")
or die("Problemas en el select".mysqli_error($cn));
header('location: joyas.php');
mysqli_close($cn);

?>