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



<!DOCTYPE html>
    <html>
     <head>
       <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
      <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="shortcut icon" href="img/favicon.png"/>
      <title>
       Añadir Más Datos
      </title>
    </head>

    <body>
      <?php
      include ('/var/www/html/tamaulipas/php/contacto.php');
      $conexion = new mysqli_connect('localhost', 'surftware', '#Fr1d1ta#', 'agenda');
      if (mysqli_connect_errno()) {
          printf("Falló la conexión: %s\n", mysqli_connect_error());
          exit();
      }


       $nom   =$_POST['Nombre'];
       $apPat =$_POST['ApPat'];
       $apMat =$_POST['ApMat'];
       $tit   =$_POST['titulo'];
       $correo=$_POST['mail'];
       $cumple=$_POST['nacimiento'];
       $esp   =$_POST['conyuge'];

      $p1=new contacto('1',$nom,$apPat,$apMat,$tit,$correo,$cumple,$esp);

      $nombre=$p1->getNombre();
      $apPat=$p1->getApPat();
      $apMat=$p1->getApMat();
      $titulo=$p1->getTitulo();
      $email=$p1->getMail();
      $cumple=$p1->getNacimiento();
      $conyuge=$p1->getConyuge();
      /*imprimir campos indiciduales*/

      echo $p1->muestraContacto();
      $p1->muestraContacto();

      $sql = "INSERT INTO contacto(nombre,apPat,apMat,titulo,email,cumple,conyuge) VALUES ('$nombre','$apPat','$apMat','$titulo','$email','$cumple','$conyuge')";

      if ($conexion->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conexion->error;
      }

      ?>


     <footer>

    </footer>

   </body>
  </html>
