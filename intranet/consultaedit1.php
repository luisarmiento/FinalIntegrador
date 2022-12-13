<?php
require_once('../utils/load.php');
//include_once '../database.php';

$db = new Database();



 if(isset($_POST['product'])){
       $c_nombre  = $_POST['nombre'];
       $c_asunto   = $_POST['asunto'];
       $c_email   = $_POST['email'];
       $c_telefono=$_POST['telefono'];
       $c_mensaje=$_POST['mensaje'];
       $c_id=$_POST['idconsulta'];
       
     $query   = "UPDATE consultas SET";
       $query  .=" nombre ='{$c_nombre}', asunto ='{$c_asunto}',";
       $query  .=" email ='{$c_email}',telefono='{$c_telefono}', mensaje ='{$c_mensaje}' ";
       $query  .=" WHERE idconsulta ='{$c_id}'";
       $result = $db->query($query);
               if($result){
                 $session->msg('s',"Consulta actualizada.");
                 
                 redirect('tablaconsultas.php', false);
               } else {
                 $session->msg('d',' Lo siento, actualización falló.');
                 redirect("editconsulta.php?id='{$c_id}'", false);
               }

 }

