<?php

require_once("../utils/load.php");
//include_once '../database.php'; 
require_once("function.php");
    if(isset($_GET['idconsulta'])){
        $c_id_consulta=$_GET['idconsulta'];
        select_id('consultas','idconsulta',$c_id_consulta);
    }
    
    
    //$statement=$db->connect()->prepare("SELECT * FROM consultas WHERE idconsulta='{$c_id_consulta}' LIMIT 1");
    //$statement->execute(['idconsulta' => $c_id_consulta]);
    //$statement->execute(array(':idCat' => $idCat));
    //$consulta=$statement->fetch();

?>

<?php
 ?>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>

      <div class="row" style="    margin: 16px 24px 24px 24px;">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Editar consulta</span>
         </strong>
        </div>
        <div class="panel-body">
         <div class="col-md">
           <form method="post" action="consultaedit1.php">
              <div class="form-group">
                  <div class="row">
                      <div class="col-md-6" style="margin-bottom: 16px;">
                          <div class="input-group">
                               <span class="input-group-addon">
                                <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="text" class="form-control" autocomplete="off" name="nombre" value="<?php echo $row->nombre;?>">
                          </div>
                        
                      </div>
                      
                      <div class="col-md-6">
                          <div class="input-group">
                               <span class="input-group-addon">
                                <i class="glyphicon glyphicon-th-large"></i>
                                </span>
                                <input type="text" class="form-control" autocomplete="off" name="asunto" value="<?php echo $row->asunto;?>">
                          </div>
                          
                      </div>
                  </div>
                
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6" style="margin-bottom: 16px;">
                      <div class="input-group">
                           <span class="input-group-addon">
                            <i class="glyphicon glyphicon-th-large"></i>
                            </span>
                            <input type="text" class="form-control" autocomplete="off" name="email" value="<?php echo $row->email;?>">
                      </div>
                         
                  </div>
                  <div class="col-md-6">
                      <div class="input-group">
                          <span class="input-group-addon">
                            <i class="glyphicon glyphicon-th-large"></i>
                            </span>
                            <input type="text" class="form-control" autocomplete="off" name="telefono" value="<?php echo $row->telefono;?>">
                      </div> 
                  </div>
                </div>
              </div>

              <div class="form-group">
               <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-th-large"></i>
                  </span>
                  <input type="text" class="form-control" autocomplete="off" name="mensaje" value="<?php echo $row->mensaje;?>">
               </div>
                  <input type="hidden" class="form-control" autocomplete="off" name="idconsulta" value="<?php echo $row->idconsulta;?>">
               </div>
                             <button type="submit" name="product" class="btn btn-danger">Actualizar</button>

                 </div>
               
          </form>
             
             <?php
	
	/*if(isset($_POST['submit'])){
		$field = array("nombre"=>$_POST['nombre'], "asunto"=>$_POST['asunto'], "asunto"=>$_POST['email'],"telefono"=>$_POST['telefono'],
                    "mensaje"=>$_POST['mensaje']);
		$tbl = "consultas";
		edit($tbl,$field,'idconsulta',$id);
		header("location:editconsulta.php");
	}*/
?>
         </div>
        </div>
      </div>
    </div>
