<?php

class Database
{
    private $host     = "127.0.0.1";
    private $db_name  = "mackaon";
    private $username = "root";
    private $password = "";
    public $conn;

    public function dbConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";
                charset=utf8;
                dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            die("Can't connect to database.<br/>Database config can be found at <i>classes/Database.php</i>");
        }

        return $this->conn;
    }
}

?>