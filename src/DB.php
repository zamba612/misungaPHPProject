<?php

namespace DB_MISUNGA;

class DB_Connecti {

    private $conn = "";
    private $host = "127.0.0.1:3307";
    private $user = "root";
    private $password = "Diakanua12@";
    private $database = "misungafinance_com";

    function __construct() {
        $conn = $this->connectDB();
        if (!empty($conn)) {
            $this->conn = $conn;
        }
    }

    function connectDB() {

        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        if (!$conn) {
            echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
            echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
            echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

//        echo "Succès : Une connexion correcte à MySQL a été faite! La base de donnée ".$this->database." est géniale." . PHP_EOL."<br>";
//        echo "Information d'hôte : " . mysqli_get_host_info($conn) . PHP_EOL;
        mysqli_set_charset($conn, 'utf8');
        return $conn;
    }

    function executeSelectQuery($query) {
        $result = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if (!empty($resultset))
            return $resultset;
    }

    function executer($sql) {
        $response=array();
        if (mysqli_query($this->conn, $sql)) {
            $response= "successfully";
        } else {
            $response= "Error updating record: " . mysqli_error($this->conn);
        }
        return $response;
    }

}
?>


