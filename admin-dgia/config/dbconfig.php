<?php
//---------------- CONNECTION -----------------------------------------------------
$host = "localhost";
$db_name = "integration";
$username = "root";
$password = "root";
$DB_con;


$DB_con = null;
try {
    $DB_con = new PDO("mysql:host=localhost;dbname=integration", 'root', 'root');
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}

class Database
{
    private $host = "localhost";
    private $db_name = "integration";
    private $username = "root";
    private $password = "root";
    public $conn;

    public function dbConnection()
    {

        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

//---------------- CONNECTION -----------------------------------------------------
