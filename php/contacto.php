<!--Desarrollado por:
 Armando Arciniega Solano
surftware@gmail.com
www.surftware.com.mx
diseño y desarrollo páginas web y sistemas computacionales.
47546367
5511894621

Bajo licencia:

Versión 0.1

Ultima Actualización: Marzo 2017
-->


<?php
class contacto {

   private $idContacto;
   private $Nombre;
   private $ApPat;
   private $ApMat;
   private $titulo;
   private $mail;
   private $nacimiento;
   private $conyuge;

 /*-------------Propiedades------------------------------*/
   function getIdContacto()     {return $this->idContacto;}
   function getNombre()         {return $this->Nombre;}
   function getApPat()          {return $this->ApPat;}
   function getApMat()          {return $this->ApMat;}
   function getTitulo()         {return $this->titulo;}
   function getMail()           {return $this->mail;}
   function getNacimiento()     {return $this->nacimiento;}
   function getConyuge()        {return $this->conyuge;}


   function setIdContacto($idContacto)  {$this->idContacto=$idContacto;}
   function setNombre()         {$this->Nombre=$Nombre;}
   function setApPat()          {$this->ApPat=$ApPat;}
   function setApMat()          {$this->ApMat=$ApMat;}
   function setTitulo()         {$this->titulo=$titulo;}
   function setMail()           {$this->mail=$mail;}
   function setNacimiento()     {$this->nacimiento=$nacimiento;}
   function setConyuge()        {$this->conyuge=$conyuge;}

   /*---------------------Metodos-----------------------*/

   //------------Constructor de la clase


   function __construct($idContacto,$nombre,$apellidoPat,$apellidoMat,$tit,$mail,$nac,$cony)
   {
       $this->idContacto=$idContacto;
       $this->Nombre=$nombre;
       $this->ApPat=$apellidoPat;
       $this->ApMat=$apellidoMat;
       $this->titulo=$tit;
       $this->mail=$mail;
       $this->nacimiento=$nac;
       $this->conyuge=$cony;

   }

   function muestraContacto()
    {
        echo $this->idContacto;
        echo $this->Nombre;
        echo $this->ApPat;
        echo $this->ApMat;
        echo $this->titulo;
        echo $this->nacimiento;
        echo $this->conyuge;
    }





}



?>
