<?php
    require_once('./utils/load.php');
      session_start();

//    function validate_fields($var){
//        global $errors;
//        foreach ($var as $field) {
//          $val = remove_junk($_POST[$field]);
//          if(isset($val) && $val==''){
//            $errors = $field ." No puede estar en blanco.";
//            return $errors;
//          }
//        }
//     }
      
           
           if(isset($_POST['add_usuario'])){
            
           $db = new Database();
           $req_fields = array('nombre','usuario','contraseña');
           if(empty($errors)){
                   validate_fields($req_fields);
               echo "<script> alert('".$errors."'); </script>";


                   $c_name  = remove_junk($db->escape($_POST['nombre']));
                   $c_usuario   = remove_junk($db->escape($_POST['usuario']));
                   $c_contra   = remove_junk($db->escape($_POST['contraseña']));
                   $c_cliente=1;    

                   if($c_name && $c_usuario && $c_contra && $c_cliente){
                       $query  = "INSERT INTO usuarios (";
                        $query .=" id_usu,nombre,usuario,contraseña,id_cargo";
                        $query .=") VALUES (";
                        $query .=" null,'{$c_name}','{$c_usuario}','{$c_contra}','{$c_cliente}'";
                        $query .=")";
                        if($db->query($query)){
                            echo "<script> Swal.fire({
                                title: '¡ERROR!',
                                text: 'Esto es un mensaje de error',
                                type: 'error',
                              });</script>";
                            $session->msg('s',"usuario agregado exitosamente. ");
                            redirect('registrar.php', false);
                          } else {
                            //$session->msg('d',' Lo siento, registro falló.');
                            redirect('registrar.php', false);
                          }
                   }else{
                       $session->msg("d", $errors);
                        redirect('registrar.php',false);
                   }
                   

                }else{
                  $session->msg('s',"Producto agregado exitosamente. ");
                  redirect('registrar.php',false);

                }
           }else{
               $session->msg("d", $errors);
                redirect('registrar.php',false);
           }
           
        
    
?>