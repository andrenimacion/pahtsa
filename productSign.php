<?php
    include 'cn.php';
    session_start();
    $id=$_SESSION['id'];
?>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        #boxVisualProduct{
            border: solid 1px gray;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 500px;
            padding: 15px;
            border-radius: 10px;
            position: absolute;
            background: whitesmoke;
            margin-left: 50px;
            margin-top: 10px;
            z-index: 32;
            box-shadow: 4px 4px 6px rgba(68,68,68,0.8);
        }
        input{
            width: 100%;
            height: auto;
            padding: 10px;
        }
        #opciones{
            position: absolute;
            width:50px;
            height: 200px;
            background-color: steelblue;
            z-index: 54;
            box-shadow: 7px 5px 10px rgba(68,68,68,0.5);
        }
        #add-post{
            width: 50px;
            padding: 10px;
            height: auto;
            transition: ease all 1s;
          
        }
        #add-post:hover{
            transition: ease all 1s;
            background: #134163;
            cursor: pointer;
        }
        #add-post2{
            width: 50px;
            padding: 10px;
            height: auto;
            transition: ease all 1s;
          
        }
        #add-post2:hover{
            transition: ease all 1s;
            background: #134163;
            cursor: pointer;
        }
        body{
            background-image: url('img/download.jpg');
            background-repeat: repeat;
            background-size: 100% auto;
            
        }
        .close{
             background-color: gray;
            transition: ease all 1s;
        }
        
        .close:hover{
            transition: ease all 0.3s;
            background-color: steelblue;
        }
        #productos{
            background:whitesmoke;
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
            box-shadow: 7px 5px 7px rgba(68,68,68,0.9);
        }
        #enlaces{
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }
    </style>
</head>
<body>
    <div id="opciones">
        <div id="add-post">
            <figure>
                <img src="img/icon-add-post.png" width="30px" height="auto">
            </figure>
        </div>
        <div id="add-post2">
            <figure>
                <img src="img/13543.png" width="30px" height="auto">
            </figure>
        </div>
    </div>
<div id="boxVisualProduct">
    <div id="close1" class="close" style="border-radius: 100%; width:32px; height: 32px; float: right; padding: 10px; cursor: pointer;">
        <img src="img/close.png" width="12px" heigth="auto">
    </div>
    <form method="POST" enctype="multipart/form-data" action="send.php">
        <label for="nombre" style="color: gray; padding: 10px; font-size: 9pt;">Ingresa un Nombre para el producto:</label>
        <input type="text" name="name" placeholder="Nombre..." style="padding: 10px;"><br>
        <label for="datos" style="padding: 10px;color: gray; font-size: 9pt;" >Ingresa la descripci&oacuten:</label>
        <textarea name="datos" style="padding: 10px;" rows="4" cols="61"></textarea><br>
         <input type="file" name="Imagen" >
        <label for="precio" style="padding: 10px;color: gray; font-size: 9pt;" >Ingresa el Precio:</label>
        <input type="number" name="precio">
        <label for="stock" style="padding: 10px;color: gray; font-size: 9pt;" >Ingresa Stock:</label>
        <input type="number" name="stock">
        <input type="submit" value="Crear Producto" class="btn btn-primary mt-3">
    </form>
</div>
<div id="productos" class="container">
    <div id="close2" class="close" style="border-radius: 100%; width:32px; height: 32px; float: right; padding: 10px; cursor: pointer;">
        <img src="img/close.png" width="12px" heigth="auto">
    </div>
   <?php
    include 'cn.php';
   ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre:</th>
                        <th scope="col">Descripci&oacuten:</th>
                        <th scope="col">Precio:</th>
                        <th scope="col">Stock:</th>
                        <th scope="col">Imagen:</th>
                        <th scope="col">Fecha/Creaci&oacuten:</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
   
                    $query = "SELECT * FROM productos where idUser=$id";
                    $resultado = $cn->query($query);
        
                    while($data = $resultado->fetch_assoc()){
            
                    ?>
                    
                    <tr>
                        <td>
                            <?php
                                echo $data['name'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $data['data'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo '$'.' ',$data['precio'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $data['stock'];
                            ?>
                        </td>
                        <td style="background-image: url('data:image/jpg;base64,<?php echo base64_encode($data['file']) ?>'); width:100px; height:125px; background-size: auto 125px;">
                           
                        </td>
                        <td>
                            <?php
                                echo $data['date'];
                            ?>
                        </td>
                        <td id="enlaces">
                         <a href="modificar.php?id=<?php echo $data['id'];?>" class="btn btn-secondary mb-4" >Modificar</a>
                         <a href="eliminar.php?id=<?php echo $data['id'];?>" class="btn btn-secondary" >Eliminar</a>
                        </td>
                    </tr>
        <?php
        }    
        ?>
            </tbody>
            </table>
</div>


<script src="js/admin.js"></script>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>