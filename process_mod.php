<?php

include 'cn.php';

$name = $_REQUEST['name'];
$datos = $_REQUEST['datos'];
$precio = $_REQUEST['precio'];
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
$stock = $_REQUEST['stock'];

$id = $_REQUEST['id'];

$queryUpdate = "UPDATE productos SET name='$name', data='$datos', precio='$precio', stock='$stock', file='$Imagen' WHERE id = '$id'";
$res = $cn->query($queryUpdate);

if($res){
    header('location: productSign.php');
}
else{
    echo "problemas sigue intentando";
}


mysqli_close($cn);

?>