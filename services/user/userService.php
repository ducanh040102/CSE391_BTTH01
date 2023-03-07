<?php
//include('./config/connectDB.php');


class userService
{
    // Chứa các hàm tương tác và xử lý dữ liệu

    public function getAllUsers()
    {
        // Bước 01: Kết nối DB Server
        $pdo = connectdb();
        //include('../config/connectDB.php');
        // Bước 02: Truy vấn DL
        //$pdo = connectdb();
        $sql = "SELECT * FROM user";
        //$conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306', 'root', '');
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        // Bước 03: Trả về dữ liệu
        $users = $stmt->fetchAll();
        // Sửa ở đây; Trả về 1 danh sách (Mảng) các ĐỐI TƯỢNG Article;

        return $users;
    }

    public function addUser()
    {
        $tennguoidung = $_POST['tennguoidung'];
        $matkhau  = $_POST['matkhau'];
        $quyenhan = $_POST['QuyenHan'];
        $pdo = connectdb();
        //$pdo = connectdb();
        $sql = "INSERT INTO user(name,pass,QuyenHan) values('" . $tennguoidung . "','" . $matkhau . "','" . $quyenhan . "') ";
        $stm = $pdo->prepare($sql);
        $stm->execute();

        //header('location:index.php');
    }

    public function getUserById()
    {
        $id = $_GET['id'];
        $pdo = connectdb();
        $stmt = $pdo->prepare("SELECT * FROM user where user.ma_user = " . $id);
        $stmt->execute();
        $user = $stmt->fetchAll();

        return $user;
    }

    public function updateUserById()
    {
        $id = $_POST['manguoidung'];
        $tennguoidung = $_POST['tennguoidung'];
        $matkhau = $_POST['matkhau'];
        $quyenhan = $_POST['quyenhan'];
        $pdo = connectdb();
        $sql = "UPDATE user SET user.name = '" . $tennguoidung . "',user.pass = '" . $matkhau . "',user.QuyenHan = '" . $quyenhan . "' WHERE user.ma_user = " . $id;
        $stm = $pdo->prepare($sql);
        $stm->execute();
    }
}
