<?php
class Database{

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "root";
    private $db_name = "test";

    private $mysqli = "";
    private $result = array();
    private $conn = false;

    public function __construct()
    {
      if(!$this->conn){
        $this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
        $this->conn = true;
        if($this->mysqli->connect_errno){
           array_push($this->result,$this->mysqli->connect_error);
           return false;
        }
      }else{
        return true;
      }
    }

    //Close connection
    public function  __destruct()
    {
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn = false;
                return true;
            }
        }else{
            return false;
        }
    }

    private function  TableExist($TableName) {
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$TableName'";
        $TableInDB = $this->mysqli->query($sql);

        if($TableInDB){
            if($TableInDB-> num_rows == 1){
                return true;
            }else{
                array_push($this->result,$TableName. "Table does not exist in database.");
            }
        }
    }
    public function Show() {
        
    }

    public function Insert($TableName, $Values=array()) {
        if($this->TableExist($TableName)){

            $sql="INSERT into $TableName() Values ()";

        }else{

        }
    }
    
    public function Update() {
        
    }
    
    public function Delete() {
        
    }

    

}
