<?php

class db
{
    public static function conn()
    {
        $servername = "localhost";
        $username = "paulroll_netmatters";
        $password = "o@9LRn@OOJZCLRO]";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=paulroll_netmatters", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "DB Connection failed: " . $e->getMessage();
        }
        $conn = null;
    }
}