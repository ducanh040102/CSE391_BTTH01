<?php
    declare(strict_types = 1);                               // Use strict types
    require './includes/database_connection.php';              // Create PDO object
    require './includes/functions.php';                        // Include functions

    $sql = "SELECT * FROM baiviet;";
    $detail = pdo($pdo, $sql) -> fetchAll();

    
?>