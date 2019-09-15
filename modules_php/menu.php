
<div id="supraMenu" class="container-fluid p-4"><a href="user_php/entrar.php" style="margin-right:15px; color:gray; font-size:10pt;" id="inSes">Iniciar Sesi&oacuten</a>|<a href="#" id="Reg" class="btn btn-primary" style="margin-left:15px; font-size:10pt;" data-toggle="modal" data-target="#exampleModal">Registrarse</a>
<a href="cerrar_sesion.php" style="margin-left:15px; font-size:10pt;" id="cerSes" >Cerrar Sesi&oacuten</a></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <!--<a class="navbar-brand" href="#"><img width="300px" height="auto" src="./img/logo-blanco.png"></a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cont&aacutectenos</a>
      </li>
    </ul>
  </div>
</nav>

<!--MODAL HIDE-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <?php require_once('./user_php/form.php') ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <?php require_once('./user_php/entrar.php') ?>
      </div>
    </div>
  </div>
</div>

<script>
    //Estoy tomando las variables de este modulo
    const supMenuLinks = {
        inSes:document.getElementById('inSes'),
        Reg:document.getElementById('Reg'),
        cerSes:document.getElementById('cerSes')
    }
</script>