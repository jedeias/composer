<?php

include ("db.php");

class Connect {

    private $sql;

    public function __construct() {
        try {
            $this->sql = new PDO(
                "mysql:host=" . HOST . 
                ";dbname=" . DATABASE,
                USER,
                PASSWORD,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
            );
        } catch (PDOException $e) {
            // Log or handle the exception appropriately
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function __destruct(){
        $this->closeConnection();
    }

    public function getSql() {
        return $this->sql;
    }

    public function closeConnection() {
        $this->sql = null;
    }
}

?>