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
$conexion = new mysqli_connect('localhost', 'root', 'aND301189', 'agenda');
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/*$consulta= 'select * from contacto';

$resultado = $conexion->query($consulta);
while($row = $resultado->fetch_assoc()){
    echo $row['idContacto'] . '<br />';
    echo $row['nombre'] . '<br />';
    echo $row['apPat'] . '<br />';
    echo $row['apMat'] . '<br />';
    echo $row['titulo'] . '<br />';
    echo $row['email'] . '<br />';
    echo $row['cumple'] . '<br />';
}
$resultado->free();


$sql = "INSERT INTO contacto(nombre,apPat,apMat,titulo,email,cumple) VALUES ('andres','arciniega','solano','electricista','armabig@','1989-12-29')";

if ($conexion->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}
//$conex->query("");


//echo 'Total results: ' . $result->num_rows;
//echo 'Total rows updated: ' . $db->affected_rows;*/

?>
