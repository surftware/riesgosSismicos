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
 $dias = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes",
                "Sábado");
 $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
                 "Agosto","Septiembre","Octubre","Noviembre","Diciembre");

  echo '<h2 class="text-right">'.$dias[date("w")].' '.date("d").' de '.$meses[date("n")-1].' de '.date("Y").'</h2>';
?>
