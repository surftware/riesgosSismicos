<div class="section fix">
    <div class="container ">
      <div class="row">

        <div class="col-md-3">
          <img src="img/creacion-paginas-web.png" class="img-responsive center-block logo">
        </div>

        <div class="col-md-6 ">
          <h1 class="text-center"><?php echo $tituloPagina; ?></h1>
          <div class="col-md-12 text-center">
            <ul class="nav nav-pills">
              <li class="active margin-pills">
                <a class="background-pills" href="index.php">Búsquedas</a>
              </li>
              <li class="margin-pills">
                <a class="background-pills" href="adicion.php">Añadir Contacto</a>
              </li>
              <li class="margin-pills">
                <a class="background-pills" href="cambios.php">Cambios</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-md-3">
          <?php
            define('BASE_PATH', '/var/www/agendaSurftware/');
            include (BASE_PATH."php/fecha.php");            
          ?>
        </div>
      </div>
      
    </div>
  </div>