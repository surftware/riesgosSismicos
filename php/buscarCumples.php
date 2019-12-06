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
function buscarCumples($consulta)
{
  define('BASE_PATH', '/var/www/agendaSurftware');
  include (BASE_PATH."php/conexion.php");
  $resultado = $conexion->query($consulta);
  while($row = $resultado->fetch_assoc())
  {
   echo
    '<div class="section">
      <div class="container">

       <div class="row">

        <div class="rojo2"> </div>
        <div class="col-md-12">
         <br />
         <h2 class="text-center">!HOY ES CUMPLEAÑOS DE!</h2>
         <h2> ID:  '.$row['idContacto'].'</h2>
        </div>

       </div>

       <div class="row">

        <div class="col-md-6">
         <p class="">   Nombre completo: </p>
         <p clas="">'.$row['titulo']." ".$row['apPat']." ".$row['apMat']." ".$row['nombre'].'</p>
        </div>

        <div class="col-md-2">
         <p>Cumpleaños: </p>
         <p>'.$row['cumple'].'</p>
        </div>

        <div class="col-md-4">
         <p>E-mail: </p>
         <p>'.$row['email'].'</p>
        </div>

       </div>

      </div>
     </div> ';

   }

   $resultado->free();

  }

 ?>
