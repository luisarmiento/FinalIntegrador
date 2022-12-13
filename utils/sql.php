<?php
  require_once('utils/load.php');

   function find_by_id($table,$id)
    {
      global $db;
      $id = (int)$id;
              $sql = $db->query("SELECT * FROM {$db->escape($table)} WHERE idconsulta='{$db->escape($id)}' LIMIT 1");
              if($result == $db->fetch_assoc($sql))
                return $result;
              else
                return null;

    }

    function tableExists($table){
      global $db;
      $table_exit = $db->query('SHOW TABLES FROM '.DB_NAME.' LIKE "'.$db->escape($table).'"');
          if($table_exit) {
            if($db->num_rows($table_exit) > 0)
                  return true;
             else
                  return false;
          }
      }
  

?>