<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrar</title>
    
    <script src="js/registrarse.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <link rel="stylesheet" href="registrar.css"/>
   
    
</head>
<body>
    
   <section class="vh-100 " style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registrarse</h3>
            <form name="rvalida" action="registrarArrendador1.php" method="post" >
              <div >
              <?php
        require_once('./utils/load.php');
if(isset($msg)){
echo display_msg($msg);} ?>
</div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="nombre" id="nombre" class="form-control form-control-lg" required />
                    <label class="form-label" for="nombre">Nombre</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="apellido" id="apellido" class="form-control form-control-lg" required />
                    <label class="form-label" for="apellido">Apellido</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="contraseña" name="contraseña" required />
                    <label for="contraseña" class="form-label">Contraseña</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Género: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" checked />
                    <label class="form-check-label" for="femaleGender">Mujer</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Hombre</label>
                  </div>

                 

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" name="usuario" class="form-control form-control-lg" required />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" name="telefono" id="phoneNumber" class="form-control form-control-lg" required />
                    <label class="form-label" for="phoneNumber">Telefono</label>
                  </div>

                </div>
              </div>

              <div class="row">
                
              </div><div class="text-center">
        <p>Ya tienes una cuenta? <a href="login.php">Inicia sesion</a></p>
      </div>

              <div class="btncenter">
                 <button type="submit" name="add_usuario" class="btn btn-danger">Enviar Formulario</button>
             </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>

    
    

</body>
</html>