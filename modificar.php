<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    #formMod{
        width: 300px;
        height: auto;
        padding: 15px;
        border: solid 0.5px whitesmoke;
    }
    input{
        width: 100%;
        padding: 10px;
    }
</style>
</head>
<body>
<?php
include 'cn.php';
$id=$_REQUEST['id'];
$query = "SELECT * FROM productos WHERE id='$id'";
$resultado = $cn->query($query);
$data = $resultado->fetch_assoc();
?>
<div class="container mt-4">
<div id="formMod">
<form method="POST" enctype="multipart/form-data" action="process_mod.php?id=<?php echo $data['id']; ?>">
        <label for="nombre" style="color: gray; padding: 10px; font-size: 9pt;">Ingresa un Nombre para el producto:</label>
        <input type="text" name="name" placeholder="Nombre..." style="padding: 10px;" value="<?php echo $data['name']; ?>"><br>
        <label for="datos" style="padding: 10px;color: gray; font-size: 9pt;" >Ingresa la descripci&oacuten:</label>
        <textarea name="datos" style="padding: 10px;" rows="6" cols="33"><?php echo $data['data']; ?></textarea><br>
         <input type="file" name="Imagen">
        <label for="precio" style="padding: 10px;color: gray; font-size: 9pt;" >Ingresa el Precio:</label>
        <input type="number" name="precio" value="<?php echo $data['precio']; ?>">
        <label for="stock" style="padding: 10px;color: gray; font-size: 9pt;" >Ingresa Stock:</label>
        <input type="number" name="stock" value="<?php echo $data['stock']; ?>">
        <input type="submit" value="Modificar" class="btn btn-primary mt-3">
</form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>