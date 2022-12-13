<?php
include("conexion.php");
include("../utils/load.php");
$id_usu= $_SESSION['id_usu'];
$consultas = "SELECT * FROM arrendarcasa where id_usu='{$id_usu}'";

?>
<html>
<head>
  <title>ver citas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/app.css">
  <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<style>
        .btn-edit{
    padding: 8px;
}
.btn-agregar{
    display: block;
    color: #FFF;
    text-transform: uppercase;
    font-weight: 900;
    padding: 1rem;
    transition: background-color .3s ease-out ;
    text-align: center;
    border: none;
    border-radius: 4px;
   background-color: #8cbc00; 
}
</style>
<body>
    
    <br><br>
    <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
    <div class="container">
        <div class="row">
            <div class="col">
               <table class="table">
                  <thead>
                	<tr>
                                 <th>id</th>
                                 <th>id_u</th>
                        	     <th>id_v</th>
                                 <th>Nombre</th>
                                 <th>Apellido</th>
                                 <th>Email</th>
                                 <th>Telefono</th>
                                 <th>Asunto</th>
                          
   
                        </tr>
     </thead>
     <tbody class="table-group-divider" id="tblDatos">
        <?php $resultado = mysqli_query($conexion, $consultas);
        while($row=mysqli_fetch_assoc($resultado)){
        ?>
     	  <tr>
     	  	  <td><?php echo $row["id"];?></td>
     	  	  <td><?php echo $row["id_usu"];?></td>
     	  	  <td><?php echo $row["idvi"];?></td>
     	  	  <td><?php echo $row["Nombre"];?></td>
              <td><?php echo $row["Apellido"];?></td>
              <td><?php echo $row["Email"];?></td>
              <td><?php echo $row["Telefono"];?></td>
              <td><?php echo $row["Asunto"];?></td>
     	  </tr>
        <?php } ?>


     
     </tbody>
   </table> 
            </div>
        </div>
    </div>

    
   
    
    <br>
            <div class="btncenter">
               <a href="../index.php" target="#"> <input class="btn" type="button" value="agregar consulta" ></div></a>
                <br>
              
                
             
</body>
</html>




