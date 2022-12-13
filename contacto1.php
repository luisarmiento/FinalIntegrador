<?php
    
    include("conexion.php");
      session_start();
  
           if(isset($_REQUEST['add_consulta'])){

            $nombre_imagen=$_FILES['foto']['name'];
            $temporal=$_FILES['foto']['tmp_name'];
            $carpeta='img';
            $ruta='.'.'.'.'/'.$carpeta.'/'. $nombre_imagen;
            move_uploaded_file($temporal,$carpeta.'/'. $nombre_imagen);

            $c_descripcion = $_REQUEST['descripcion'];
            $c_id_usu =$_SESSION['id_usu'];

            $query=" INSERT INTO vivienda (idvi,id_usu,ruta,descripcion) VALUES ('null','$c_id_usu','$ruta','$c_descripcion')";
            $execute = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
            
            if($execute){
                header("Location: index.php");

            }else{
                echo "hubo un error";
            }     

        }
    
?>