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
define('BASE_PATH', '/var/www/agendaSurftware/');
function consulta($consulta){

  include (BASE_PATH."php/conexion.php");

  $resultado = $conexion->query($consulta);
  
  while($row = $resultado->fetch_assoc()){

   $idContacto=$row['idContacto'];
   $nombre=$row['nombre'];
   $apPat=$row['apPat'];
   $apMat=$row['apMat'];

   $conexion = new mysqli_connect('localhost', 'surftware', '#Fr1d1ta#', 'agenda');
   $consultaCargo = "SELECT idCargo,dependencia,cargo FROM contacto INNER JOIN cargo ON '$idContacto'=contactoCargo AND nombre LIKE '$nombre'  AND apPat like '$apPat'";
   $resultadoCargo=$conexionCargo->query($consultaCargo);

   $conexion = new mysqli_connect('localhost', 'surftware', '#Fr1d1ta#', 'agenda');
   $consultaTel = "SELECT idTel,numero,extension FROM contacto INNER JOIN telefono ON '$idContacto'=contactoTel AND nombre LIKE '$nombre' AND apPat LIKE '$apPat' ";
   $resultadoTel=$conexionTel->query($consultaTel);
   $contador=0;

   $conexion = new mysqli_connect('localhost', 'surftware', '#Fr1d1ta#', 'agenda');
   $consultaObserv = "SELECT idObservaciones,observaciones FROM contacto INNER JOIN observaciones ON '$idContacto'=contactoObserv AND nombre LIKE '%$nombre%' AND apPat LIKE '$apPat' ";
   $resultadoObserv=$conexionObserv->query($consultaObserv);

   echo '
   <div class="section">
    <div class="container">
     <div class="row">
     <div class="rojo2"> </div>
      <div class="col-md-12">
       <h2 class="text-center">Datos Contacto ID:  '.$idContacto.'</h2>
      </div>
     <div class="row">
      <div class="col-md-6">
       <p class="p-body" class="">   Nombre completo: </p>
       <p clas="">'.$row['titulo']." ".$apPat." ".$apMat." ".$nombre.'</p>
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
    </div>';
     
   
   
   while($rowC = $resultadoCargo->fetch_assoc()){
   
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
    
    while($rowT = $resultadoTel->fetch_assoc()){
    
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
     </div>   ';
     
        }
     }
     
     
   while($rowO = $resultadoObserv->fetch_assoc()){
   
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
   }
   
   echo '
   <div class="section">
    <div class="container">
     <div class="row">
     
      <div class="col-md-3">
       <form role="form-control formulario" method="POST" action = "index.php">
       <h2>*Añadir otro teléfono <input class="form-control" TYPE="text" name="nTel" ></h2>
      </div>
      <div class="col-md-2">
       <h2>Extensión:    <input class="form-control" TYPE="text" name="nExt" ></h2>
       <input TYPE="hidden" name="nId" value="'.$idContacto.'">
      </div>
      <div class="col-md-2">
       <br /><br /><br />
       <input class="btn-nTel btn-default " type="submit" NAME="enviar" VALUE="Añadir">
       </form>
      </div>

     </div>
    </div>
   </div>';
  }//fin de toda la búsqueda

  $resultado->free();
  $resultadoCargo->free();

}//fin de la función completa


//Envio del telefono
$numTel= $_POST['nTel'];
$numExt= $_POST['nExt'];
$idContacto=$_POST['nId'];
$conexion = new mysqli_connect('localhost','surftware','#Fr1d1ta#','agenda');
$consultaNuTel = " INSERT INTO telefono(numero,extension,contactoTel) values('$numTel','$numExt','$idContacto') ";
if ($conexionNuTel->query($consultaNuTel) === TRUE) {
 echo '
  <div class="section">
   <div class="container">
    <div class="row">

     <div class="col-md-12">
      <h2 class="text-center">¡¡Nuevo Teléfono Guardado Correctamente!!</h2>
     </div>
    </div>
   </div>
  </div>';
}
else{}


 ?>
