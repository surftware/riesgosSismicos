<!--Desarrollado por:
 Armando Arciniega Solano
surftware@gmail.com
www.surftware.com.mx
diseño y desarrollo páginas web y sistemas computacinales.
47546367
5511894621

Bajo licencia:

Versión 0.1

Ultima Actualización: Marzo 2017
-->

<?php
  define('BASE_PATH', '/var/www/html/tamaulipas/');

  function consultaCambios($consulta)//Inicia Función
  {
    include (BASE_PATH."php/conexion.php");
    $resultado = $conexion->query($consulta);

    while($row = $resultado->fetch_assoc())//comienza la búsqueda en tabla:"contacto"
    {

      $idContacto=$row['idContacto'];
      $nombre=$row['nombre'];

      echo '
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="rojo2"> </div>

            <div class="col-md-12">
             <h2 class="text-center">Datos Contacto ID:  '.$idContacto.'</h2>
           </div>

          <div class="row">
           <form role="form-control formulario" method="POST" action = "consultaCambios.php">
            <div class="col-md-6">
            <p class="p-body" class="">   Nombre completo: </p>
            <p clas="">'.$row['titulo']." ".$row['apPat']." ".$row['apMat']." ".$nombre.'</p>
          </div>
          <div class="col-md-2">
           <p class="p-body">Cumpleaños: </p>
           <p>'.$row['cumple'].'</p>
          </div>
        <div class="col-md-4">
          <p class="p-body">E-mail: </p>
          <p>'.$row['email'].'</p>
        </div>




      </div>
    </div>
  </div>';

      $conexion = new mysqli_connect('localhost', 'surftware', '#Fr1d1ta#', 'agenda');
      $consultaCargo = "SELECT idCargo,dependencia,cargo FROM contacto INNER JOIN cargo ON '$idContacto'=contactoCargo && nombre='$nombre'  ";        //&& idContacto=contactoObserv && idContacto=contactoCargo) ;
      $resultadoCargo=$conexionCargo->query($consultaCargo);

      while($rowC = $resultadoCargo->fetch_assoc())//comienza la búsqueda en tabla:"cargo"
      {
        echo '
        <div class="section">
               <div class="container">
                <div class="row">

                    <div class="col-md-6">
                    <p class="p-body" class=""> Dependencia: </p>
                    <p clas="">'.$rowC['dependencia'].'</p>
                  </div>

                  <div class="col-md-6">
                   <p class="p-body">Cargo: </p>
                   <p>'.$rowC['cargo'].'</p>
                  </div>

                </div>
              </div>
            </div>';

            $conexion = new mysqli_connect('localhost', 'surftware', '#Fr1d1ta#', 'agenda');
            $consultaObserv = "SELECT idObservaciones,observaciones FROM contacto INNER JOIN observaciones ON '$idContacto'=contactoObserv && nombre='$nombre' ";        //&& idContacto=contactoObserv && idContacto=contactoCargo) ;
            $resultadoObserv=$conexionObserv->query($consultaObserv);


            while($rowO = $resultadoObserv->fetch_assoc())//comienza la búsqueda en tabla:"observaciones"
            {
              echo '
              <div class="section">
                <div class="container">
                 <div class="row">

                          <div class="col-md-12">
                           <p class="p-body"> Observaciones: </p>
                           <p clas="">'.$rowO['observaciones'].'</p>
                          </div>

                          </div>
                        </div>
                      </div>';
                      $conexion = new mysqli_connect('localhost', 'surftware', '#Fr1d1ta#', 'agenda');
                      $consultaTel = "SELECT idTel,numero,extension FROM contacto INNER JOIN telefono ON '$idContacto'=contactoTel && nombre='$nombre' ";        //&& idContacto=contactoObserv && idContacto=contactoCargo) ;
                      $resultadoTel=$conexionTel->query($consultaTel);
                      $contador=0;

                      while($rowT = $resultadoTel->fetch_assoc())//comienza la búsqueda en tabla:"telefono"
                      {
                        $contador=$contador+1;
                        echo '
                        <div class="section">
                          <div class="container">
                           <div class="row">

                            <div class="col-md-12">
                             <p class="p-body">Teléfono '.$contador.' :   '. $rowT['numero'].'<br />Extensión: '.$rowT['extension'].'</p>
                            </div>

                          </div>
                        </div>
                       </div>
                       ';
                     }

            }

      }

      //aqui estab telefono


  }

  $resultado->free();
  $resultadoCargo->free();

}




 ?>
