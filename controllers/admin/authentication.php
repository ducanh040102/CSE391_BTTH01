<?php      
    session_start();
    include '../../models/data/connection.php';
    if(isset($_POST['btnLogin'])){
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
      
        $sql = "select QuyenHan from user where name = '$username' and pass = '$password'";  
        $result = $pdo->query($sql);
        // echo var_dump($result);
        $result = $result->fetch();
        echo print_r($result);
        if ($result["QuyenHan"] == 1){
        // if ($username == 'admin' and $password == 'admin123'){
            $_SESSION['username'] == $username;
            header("Location:../../views/admin/admin.php");
        }
        else if ($result["QuyenHan"]==2)
        {
            header("Location:../../views/home/index.php");
        }
        else
        {
            echo "<script>alert('Sai tài khoản hoặc mất khẩu!!!');</script>";
            header("Location:../../views/home/index.php");
        }
        // if($count == 1){  
        //     echo "<h1><center> Login successful </center></h1>";  
        // }  
        // else{  
        //     echo "<h1> Login failed. Invalid username or password.</h1>";  
        // }    
    } 
?>  