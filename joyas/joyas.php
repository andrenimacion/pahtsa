<?php
    include 'cn.php';
    /*session_start();
    $id=$_SESSION['id'];*/
?>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    </div>
   <?php
    include 'cn.php';
   ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre:</th>
                        <th scope="col">Kilates:</th>
                        <th scope="col">Peso de Joyas:</th>
                        <th scope="col">Valor In./Joyas:</th>
                        <th scope="col">pvpJoyas:</th>
                        <th scope="col">Imagen:</th>
                        <th scope="col">Feha:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
   
                    $query = "SELECT * FROM joyaDb";
                    $resultado = $cn->query($query);
        
                    while($data = $resultado->fetch_assoc()){
            
                    ?>
                    
                    <tr>
                        <td>
                            <?php
                                echo $data['nombreJojas'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $data['kilatesJoyas'].''.'Kt';
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $data['pesoJoyas'].''.'gr';
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $data['valorInternoJoyas'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $data['pvpJoyas'];
                            ?>
                        </td>
                        <td >
                           <img width="100px" height="auto" src="data:image/jpg;base64,<?php echo base64_encode($data['imagen']); ?>" alt="imagen de joyeria">
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