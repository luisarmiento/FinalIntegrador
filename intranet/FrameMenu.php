<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: ../login.php');
        }
    }


?>
<html>
    <head><title>Sistema de ventas</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    </head>
    <frameset cols="18%,*" frameborder="0" >
        <frameset rows="32%,*" noframes>             
            <frame name="Logeado" src="Logueado.php" scrolling="auto">
            <frame name="Izquierda" src="MenuVertical.php" scrolling="no">
        </frameset>
        <frameset rows="12%,*" noframes>             
              <frame name="Encabezado" src="cabecera.php" scrolling="no">
              <frame name="central" src="central.php" scrolling="auto">
        </frameset>
    </frameset>
   
</html>