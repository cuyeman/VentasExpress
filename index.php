<?php
include('lib/constantes.php');
include('lib/Cabecera.php');
include('lib/vacaciones.php');
$_SESSION["hm"]="Hola Mundo";

$vacacion= new Vacaciones("1-9",
                          "TEST",
                          "CARGO TEST",
                           "",
                            "",
                            "");
$_SESSION["regvacacion"]=$vacacion;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <body>
        
        <div id="contenedor">
            <div id="titulo"></div>
            <div id="menu"><?php include('menu.php');?></div>
            <div id="tituloContenido" >SUBTITULO</div>
            <div id="contenido"></div>
        </div>   
    </body>
    
    <script>
        $("#prisolicitudA").on( "click", function( event ) {
            if(($("[id*=subsolicitudA]").css("display")!="none")){
                 $("[id*=subsolicitudA]").css("display","none");
            }
            else{
                $("[id*=subsolicitudA]").show();
                $("[id*=subsolicitudA]").css("display","block");
            }
                
                
            });
        
        $('[data-toggle="tooltip"]').tooltip(); 
    </script>
    
        <script>
        $("#prisolicitudB").on( "click", function( event ) {
            if(($("[id*=subsolicitudB]").css("display")!="none")){
                 $("[id*=subsolicitudB]").css("display","none");
            }
            else{
                $("[id*=subsolicitudB]").show();
                $("[id*=subsolicitudB]").css("display","block");
            }
                
                
            });
        
        $('[data-toggle="tooltip"]').tooltip(); 
    </script>
    
        <script>
        $("#prisolicitudC").on( "click", function( event ) {
            if(($("[id*=subsolicitudC]").css("display")!="none")){
                 $("[id*=subsolicitudC]").css("display","none");
            }
            else{
                $("[id*=subsolicitudC]").show();
                $("[id*=subsolicitudC]").css("display","block");
            }
                
                
            });
        
        $('[data-toggle="tooltip"]').tooltip(); 
    </script>
</html>
