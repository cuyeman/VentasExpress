<?php
include('$URLBASE/lib/constantes.php');
include('../../lib/Cabecera.php');
include ('../../index.php');

if(isset($_SESSION["aVacaciones"])){
    $arrVacaciones=$_SESSION["aVacaciones"];    
}
 else {
     $arrVacaciones="";
}
?>

<html>
ConsultaProductos
</html>
  