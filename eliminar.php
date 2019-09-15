<?php

include 'cn.php';

$id = $_REQUEST['id'];

$queryDelete = "DELETE FROM productos WHERE id='$id'";
$res = $cn->query($queryDelete);

if($res){
    header('location: productSign.php');
}
else{
    echo "problemas sigue intentando";
}


mysqli_close($cn);

?>