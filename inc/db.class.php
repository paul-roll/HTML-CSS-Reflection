<?php

class db
{
    function __construct()
    {
        $servername = "localhost";
        $username = "netmatters";
        $password = "o@9LRn@OOJZCLRO]";
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=netmatters", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "DB Connection failed: " . $e->getMessage();
        }
    }
}