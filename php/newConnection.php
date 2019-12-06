<?php
    $servidor = "localhost";
    $usuario = "surftware";
    $contrasena = "#Fr1d1ta#";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $basededatos = "riesgosSismicos";

    $buscar= $_POST['consultar'];


    $conexion = mysqli_connect($servidor,$usuario,$contrasena) or die ("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db($conexion,$basededatos )or die ("No existe la base de datos");


    
