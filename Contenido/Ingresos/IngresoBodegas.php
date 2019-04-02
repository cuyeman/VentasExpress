<?php
include('../../lib/constantes.php');
include('../../lib/Cabecera.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="../css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div id="contenedor">
            <div id="titulo"></div>
            <div id="menu"><?php include('../menu.php');?></div>
                    <div id="contenido">
                        <form class="vacaciones form-horizontal" action="../lib/recepcionvacaciones.php" method="post">
                            <div class="form-group"> 
                                <label class="col-sm-2 control-label">Rut:</label> 
                                <div class="col-sm-10">
                                    <input class="form-control input-sm" id="rut" name="rut" type="text">
                                </div>
                            </div>
                            <br>Nombre: <input id="nombre" name="nombre" type="text">
                            <br>Cargo: <input id="cargo" name="cargo" type="text">
                            <br>Fecha de inicio:<input id="fechaini" name="fechaini" type="text">
                            <br>Días totales:<input id="diastotales" type="text">
                            <br>Comentario<textarea id="comentario" rows="7" cols=20>   </textarea>
                            <input type="submit" value="Enviar"  >                     
                        </form>
                        <form class="vacaciones form-horizontal" action="../lib/eliminar.php" method="post">
                            <div class="form-group"> 
                                <label class="col-sm-2 control-label">Rut:</label> 
                                <div class="col-sm-10">
                                    <input class="form-control input-sm" id="eliminarut" name="rut" type="text">
                                </div>
                           
                                <input id="btneliminar" type="button" value="Eliminar"  >   
                            </div>
                        </form>
                        <form class="vacaciones form-horizontal" action="../lib/eliminar.php" method="post">
                            <div class="form-group"> 
                                <label class="col-sm-2 control-label">Rut:</label> 
                                <div class="col-sm-10">
                                    <input class="form-control input-sm" id="eliminarut_jq" name="rut" type="text">
                                </div>
                           
                                <input id="btneliminar" type="button" value="Eliminar"  >   
                            </div>
                        </form>
                    </div>

        </div>
        <div id="resultado"></div>
    </body>
    
    <script>
        $("#btneliminar").on( "click", function( event ) {
           $.post( "../lib/eliminar.php", { rut:  $("#eliminarut_jq").value() }, function( data ) {
                $( "#resultado" ).html( data );
              });
           
            });
            
        $("[id*=subsolicitud]").show();
        $("#subsolicitud").addClass("active");
        $("[id*=subsolicitud]").css("display","block");
        $('[data-toggle="tooltip"]').tooltip();
    </script>
</html>
