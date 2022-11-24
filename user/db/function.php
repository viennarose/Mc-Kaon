<?php 
require_once 'connection.php';

class Projects
{
    public function __construct()
    {
        $database   = new Database;
        $db         = $database->dbConnection();
        $this->conn = $db;
    }

    public function query($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }

   
 

}
?>
