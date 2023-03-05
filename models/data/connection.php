<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "btth01-cse485"; 
    $post = '3306'; 
    $charset='utf8mb4';
    $type = 'mysql';
    
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    $conn = "$type:host=$host;dbname=$db_name;post=$post;charset=$charset";
    try {
        $pdo = new PDO($conn, $user, $password, $options);
    } catch (PDOException $e) {
        die("Failed to connect with MySQL: ");
        throw new PDOException($e->getMessage(), $e->getCode());  
    }
    // $con = mysqli_connect($host, $user, $password, $db_name);  
    // if(mysqli_connect_errno()) {  
    //     die("Failed to connect with MySQL: ". mysqli_connect_error());  
    // }  
?>  