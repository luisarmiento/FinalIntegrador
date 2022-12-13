<?php 
session_start();
?>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
        <link href="CSS/EstiloLogueado.css" rel="stylesheet" type="text/css"/>
         
    </head>
    <body style="background-color: #508bfc;">       
        <div>
            <img src="img/icono2.png" alt=""/>
        </div>   
         
           <p class="centrado">  <?php echo $_SESSION['username']; ?> </p>
           
            <p><a href="logout.php" target="#">Cerrar sesion</a></p>

         
    </body>
</html>
