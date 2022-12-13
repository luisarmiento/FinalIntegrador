<?php
    
    include("conexion.php");
      session_start();
  
           if(isset($_REQUEST['insertar'])){

            $c_nombre = $_REQUEST['Nombre'];
            $c_apellido = $_REQUEST['Apellido'];
            $c_email = $_REQUEST['Email'];
            $c_telefono = $_REQUEST['Telefono'];
            $c_asunto = $_REQUEST['Asunto'];
            $c_id_usu =$_SESSION['id_usu'];

            $query=" INSERT INTO arrendarcasa (id,id_usu,idvi,Nombre,Apellido,Email,Telefono,Asunto) VALUES ('null','$c_id_usu','null','$c_nombre','$c_email','$c_telefono','$c_asunto','$c_descripcion')";
            $execute = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
            
            if($execute){
                header("Location: index.php");

            }else{
                echo "hubo un error";
            }     

        }
    
?>