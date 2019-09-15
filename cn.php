<?php
    $cn =mysqli_connect('localhost', 'admin_pahtsa', 'Mormon2012' , 'pahtsa_products');

if ($cn->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $cn->connect_errno . ") " . $cn->connect_error;
}/*
else{
    echo "se conecto";
}*/
?>