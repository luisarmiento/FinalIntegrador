<?php

require_once("utils/load.php");
//include_once '../database.php'; 
require_once("intranetCL/function.php");

    if(isset($_GET['idvi'])){
        $c_idvi=$_GET['idvi'];
        select_id('vivienda','idvi',$c_idvi);
    }

     //$statement=$db->connect()->prepare("SELECT * FROM consultas WHERE idconsulta='{$c_id_consulta}' LIMIT 1");
    //$statement->execute(['idconsulta' => $c_id_consulta]);
    //$statement->execute(array(':idCat' => $idCat));
    //$consulta=$statement->fetch();

    
    
?>

<?php
 ?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/estiloss.css" rel="stylesheet" >

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
  
</head>

<body>
<div class="container">
  <header class="blog-header lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" ></a>
      </div>

      <div class="col-4 text-center">
        <h1>TE LO ALQUILO P.</h1>
      </div>

      <div class="col-4 d-flex justify-content-end align-items-center">
        
        
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="intranet/FrameMenu.php">Gestionar casas arrendadas</a>
          <a class="dropdown-item" >Otra accion</a>
        </div>
      
        <a class="btn btn-sm btn-outline-secondary" href="login.php">Iniciar sesion</a>
        

      </div>
    </div>
  </header>

  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
      <center><h1 class="display-4 fst-italic">TE LO ALQUILO P.</h1></center>
      <p class="lead mb-0"><a class="text-white fw-bold"></a></p>
    </div>
  </div>



<div>
  <div class="text-center" name="ruta">
  <img src="<?php echo substr(($row->ruta),3);?>" width="400" >


  </div>
</div>


  <div class="row">
    
    <div class="p-4 col-8 " name="descripcion">
      <p> <?php echo $row->descripcion;?> </p>
    </div>


    <div class="p-4 col-4">
      <form action="desc1.php" method="POST" enctype="multipart/form-data">
         <?php
        require_once('./utils/load.php');
if(isset($msg)){
echo display_msg($msg);} ?>

        <div class="form-group">
          <label for="exampleFormControlInput1">Nombres</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Introduzca su nombre" name="Nombre">
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Apellidos</label>
          <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Introduzca su apellido" name="Apellido">
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Correo</label>
          <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="name@gmail.com" name="Email">
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Telefono</label>
          <input type="number" class="form-control" id="exampleFormControlInput4" placeholder="Introduzca su numero de telefono" name="Telefono">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Asunto</label>
          <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" name="Asunto"></textarea>
        </div><br>

        <div class="form-group">
        <button type="submit" class="btn btn-primary" name="insertar">Consultar</button>
        </div>

      </form>

    </div>
  </div>

</div>

</body>
</html>