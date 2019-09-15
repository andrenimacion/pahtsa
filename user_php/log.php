 <?php
    include 'cn.php';
    
    session_start();
    
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['Pass'];
    
    $queryVerification = "SELECT * FROM acceso_p where mail_p='$email' and password_p='$pass' ";
    $queryConulta = mysqli_query($cn, $queryVerification);
    if($array = mysqli_fetch_array($queryConulta))
    {
        $_SESSION['username'] = $email;
        $_SESSION['id'] = $array[id];
        
        header("location: ../index.php");
    }
    else{
        echo 'datos incorrectos';
    }
    
 ?>