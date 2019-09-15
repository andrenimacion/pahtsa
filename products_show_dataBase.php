<?php
    include 'cn.php';
    
?>
    <?php
        $query = "SELECT * FROM productos AS p INNER JOIN acceso_p AS a ON p.idUser=a.id";
        $resultado = $cn->query($query);
        
        while($data = $resultado->fetch_assoc()){
            
        ?>
        <div class="card" style="width: 300px;">
        <div class="img" style="background-image: url('data:image/jpg;base64,<?php echo base64_encode($data['file']) ?>'); width:290px; height:325px; background-size: 290px 325px;">
        </div>
        <div class="card-body">
        <h5 class="card-title"><?php
        echo $data['name'];
        ?>
        </h5>
        <p class="card-text"><?php
        echo $data['data'];
        ?>
        </p>
        </div>
        <div id="list_g">
            
            <div class="b">
                <note>Precio:</note><strong> <?php
                echo ' '.'$'.' ',$data['precio'];
                ?></strong>
            </div>
        
            <div class="b">
                <note>Stock</note><strong> <?php
                echo $data['stock'];
                ?></strong>
            </div>
            
            <div class="b">
                <note style="font-size: 6pt; color: gray;">Usuario: <?php
                echo $data['mail_p'];
                ?></note>
            </div>
        </div>
        
        <div class="card-body">
        <a href="#" class="card-link">¡Añadir a la Cesta!</a>
        <a href="#" class="btn btn-primary">Comprar</a>
        </div>
        </div>
        <?php
        }
        ?>
