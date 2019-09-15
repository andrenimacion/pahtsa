
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAHTSA</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    </style>
</head>
<body>
    <section id="formulario" class="container mt-4 mb-4 p-4">
    <form action="cnJoyas.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre:</label>
        <input type="text" class="form-control" name="nombreJojas" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de Joyas">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Kilates:</label>
        <input type="number" name="kilates" class="form-control" id="exampleInputPassword1" placeholder="Kilates peso en gramos">
    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Peso de Joya:</label>
        <input type="number" name="pJoyas" class="form-control" id="exampleInputPassword1" placeholder="Peso de joya">
    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">valor Interno Joyas:</label>
        <input type="number" name="valInJo" class="form-control" id="exampleInputPassword1" placeholder="V. Int. Joyas">
    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">P.V.P. Joyas:</label>
        <input type="number" name="pvp" class="form-control" id="exampleInputPassword1" placeholder="P.V.P.">
    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Imagen:</label>
        <input type="file" name="Imagen" ></div>
    
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </section>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>