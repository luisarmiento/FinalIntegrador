<?php
    include_once 'database.php';
    
    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: intranet/FrameMenu.php');
            break;

            case 2:
            header('location: intranetCL/FrameMenu.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE usuario = :username AND contraseña = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[4];
            $id_usu = $row[0];
            $usuario = $row[2];

            $_SESSION['rol'] = $rol;
            $_SESSION['id_usu'] = $id_usu;
            $_SESSION['username'] = $usuario;
            switch($rol){
                case 1:
                    header('location: intranet/FrameMenu.php');
                break;

                case 2:
                header('location: intranetCL/FrameMenu.php');
                break;

                default:
            }
        }else{
            // no existe el usuario
            echo "Nombre de usuario o contraseña incorrecto";
        }
        

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
    <title>Login</title>
</head>
<body>
    <form action="#" method="POST">
  <section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Inciar Sesion</h3>

            <div class="form-outline mb-4">
              <input type="field" name="username" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Usuario</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Contraseña</label>
            </div>
            <div class="text-center">
        <p>No tiene una cuenta? <a href="AoB.php">Registrate</a></p>
        <p><a href="index.php"> Volver</a> </p>
      </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
            

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>



            <hr class="my-4">
          
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>

</body>
</html>

