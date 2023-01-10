<?php

class query
{
    public static function select($columns, $table, $extra = null)
    {
        if (!empty($db = db::conn())) {
            try {
                // $stmt = $db->conn->prepare($query);
                $stmt = $db->prepare("SELECT " . $columns . " FROM " . $table . " " . $extra);
                $stmt->execute();
                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                return $stmt->fetchAll();
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        $db = null;
    }
}