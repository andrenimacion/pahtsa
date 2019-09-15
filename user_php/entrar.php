<html lang="es">
<head>
    
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta charset="UTF-8">
    <style>
        #formularioss{
            width: 325px;
            height: auto;
            padding: 35px;
            border: solid 0.5px white;
            background-color: whitesmoke;
            box-shadow: 5px 5px 10px rgba(20,20,20,0.5);
        }
        #bodyes{
            display: flex;
            align-items: center;
            background-image: url('../img/10325.jpg');
            background-size: 110% 110%;
            width: 100%;
            height: 100%;
            transition: ease all 2s;
            background-position: 0px 0px;
        }
       
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div id="bodyes">
<div id="formularioss">
    <h4>Bienvenido:</h4>
  <form action="log.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" requerid>
    <small id="emailHelp" class="form-text text-muted">La direcci&oacuten de correo electr&oacutenico es su usuario.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Pass" placeholder="Password" requerid>
  </div>
  <button type="submit" class="btn btn-primary">Iniciar sesi&oacuten</button>
    <p><h5>Si usted no dispone de una cuenta de usuario de click <a href="../index.php" class="btn btn-secondary">aquí</a></h5></p>
</form>
</div
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
