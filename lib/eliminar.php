<?php

include('../../lib/constantes.php');
include('../../lib/Cabecera.php');

$ideliminar=$_POST["rut"];

 foreach ($_SESSION["aVacaciones"] as $key => $oVacacion) {
                if ($oVacacion->getRut()==$ideliminar){
                    unset($_SESSION["aVacaciones"][$key]);
                    echo "Eliminado";
                }
            }
            
       