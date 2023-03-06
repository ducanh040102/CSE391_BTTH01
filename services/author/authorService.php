<?php
//include('./config/connectDB.php');


class authorService
{
    // Chứa các hàm tương tác và xử lý dữ liệu

    public function getAllAuthors()
    {
        // Bước 01: Kết nối DB Server
        $pdo = connectdb();
        //include('../config/connectDB.php');
        // Bước 02: Truy vấn DL
        //$pdo = connectdb();
        $sql = "SELECT * FROM tacgia";
        //$conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306', 'root', '');
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        // Bước 03: Trả về dữ liệu
        $authors = $stmt->fetchAll();
        // Sửa ở đây; Trả về 1 danh sách (Mảng) các ĐỐI TƯỢNG Article;

        return $authors;
    }

    public function addAuthor()
    {
        $tentacgia = $_POST['tentacgia'];
        $pdo = connectdb();
        //$pdo = connectdb();
        $sql = "INSERT INTO tacgia(ten_tgia) values('" . $tentacgia . "') ";
        $stm = $pdo->prepare($sql);
        $stm->execute();

        //header('location:index.php');
    }

    public function getAuthorById()
    {
        $id = $_GET['id'];
        $pdo = connectdb();
        $stmt = $pdo->prepare("SELECT * FROM tacgia where tacgia.ma_tgia = " . $id);
        $stmt->execute();
        $author = $stmt->fetchAll();

        return $author;
    }

    public function updateAuthorById()
    {
        $id = $_POST['matacgia'];
        $tentacgia = $_POST['tentacgia'];
        $pdo = connectdb();
        $sql = "UPDATE tacgia SET tacgia.ten_tgia = '" . $tentacgia . "' WHERE tacgia.ma_tgia = " . $id;
        $stm = $pdo->prepare($sql);
        $stm->execute();
    }
}
