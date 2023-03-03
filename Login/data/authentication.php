<?php      
    session_start();
    include 'connection.php';
    if(isset($_POST['btnLogin'])){
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select Quyenhan from user where name = '$username' and pass = '$password'";  
        $result = mysqli_query($con, $sql);  
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        // $count = mysqli_num_rows($result);  
          
        if ($result == 1){
            $_SESSION['username'] == $username;
            header("Location:../admin/admin.php");
        }
        else
        {
            header("Location:../index.php");
        }
        // if($count == 1){  
        //     echo "<h1><center> Login successful </center></h1>";  
        // }  
        // else{  
        //     echo "<h1> Login failed. Invalid username or password.</h1>";  
        // }    
    } 
?>  