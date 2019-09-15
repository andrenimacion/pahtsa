<!DOCTYPE html>
<?php
    session_start();
    $usuario = $_SESSION['username'];
    echo "<script>";
    echo "var_a = '$usuario'";
    echo "</script>";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAHTSA</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="node_modules/lib/anime.min.js"></script>
</head>
<body>
    <div class="container-fluid p-3" id="menUp">
        <p style="margin-left: 10px;"><?php echo '¡Hola! '.' '.'<strong style="color:white;">'.$usuario.'</strong>'; ?></p>
        <div id="supraMenu" class="container-fluid p-4"><a href="user_php/entrar.php" id="inSes" class="workMen" style="margin-left: 10px;">Iniciar Sesi&oacuten |</a>
            <a href="#" id="Reg" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" class="workMen" style="margin-left: 10px;">Registrarse</a>
            <a href="cerrar_sesion.php" style="margin-left:15px; font-size:10pt;" id="cerSes" class="workMen" style="margin-left: 10px;">Cerrar Sesi&oacuten</a>
        </div>
    </div>
    <?php require_once('./modules_php/banner.php'); ?>
    <section id="menu">
        <?php require_once('./modules_php/menu.php'); ?>
    </section>
    <section>
        <?php require_once('./modules_php/body.php'); ?>
    </section>
    <section class="container mt-4" id="products">
        <?php require_once('product.php'); ?>
    </section>
        <?php  require_once('./modules_php/footer.php'); ?>
    <script src="js/supMenu.js">
    </script>
    <a href="productSign.php" class="btn btn-secondary">Administrador</a>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>