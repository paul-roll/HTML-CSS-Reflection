<?php

function query($query)
{
    include("inc/connect.php");

    try {
        $stmt = $db->prepare($query);
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $db = null;
}
