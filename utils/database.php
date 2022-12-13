<?php
require_once(LIB_PATH_INC.DS."config.php");

class Database{

    private $con;
    public $query_id;
    

    public function __construct(){
        $this->db_connect();
    }
    
     public function escape($str){
   return $this->con->real_escape_string($str);
 }
    
    public function db_connect()
    {
      $this->con = mysqli_connect(DB_HOST,DB_USER,DB_PASS);
      if(!$this->con)
             {
               die(" Database connection failed:". mysqli_connect_error());
             } else {
               $select_db = $this->con->select_db(DB_NAME);
                 if(!$select_db)
                 {
                   die("Failed to Select Database". mysqli_connect_error());
                 }
             }
    }
    
    public function query($sql)
   {

      if (trim($sql != "")) {
          $this->query_id = $this->con->query($sql);
      }
      if (!$this->query_id)
        // only for Develope mode
              die("Error en esta consulta :<pre> " . $sql ."</pre>");
       // For production mode
        //  die("Error on Query");

       return $this->query_id;

   }
   


   

}

?>