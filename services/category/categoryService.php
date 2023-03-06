<?php
//include('./config/connectDB.php');


class categoryService
{
    // Chứa các hàm tương tác và xử lý dữ liệu

    public function getAllCategories()
    {
        // Bước 01: Kết nối DB Server
        $pdo = connectdb();
        //include('../config/connectDB.php');
        // Bước 02: Truy vấn DL
        //$pdo = connectdb();
        $sql = "SELECT * FROM theloai";
        //$conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306', 'root', '');
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        // Bước 03: Trả về dữ liệu
        $categories = $stmt->fetchAll();
        // Sửa ở đây; Trả về 1 danh sách (Mảng) các ĐỐI TƯỢNG Article;

        return $categories;
    }

    public function addCategory()
    {
        $tentheloai = $_POST['tentheloai'];
        $pdo = connectdb();
        //$pdo = connectdb();
        $sql = "INSERT INTO theloai(ten_tloai) values('" . $tentheloai . "') ";
        $stm = $pdo->prepare($sql);
        $stm->execute();

        //header('location:index.php');
    }

    public function getCategoryById()
    {
        $id = $_GET['id'];
        $pdo = connectdb();
        $stmt = $pdo->prepare("SELECT * FROM theloai where theloai.ma_tloai = " . $id);
        $stmt->execute();
        $category = $stmt->fetchAll();

        return $category;
    }

    public function updateCategoryById()
    {
        $id = $_POST['matheloai'];
        $tentheloai = $_POST['tentheloai'];
        $pdo = connectdb();
        $sql = "UPDATE theloai SET theloai.ten_tloai = '" . $tentheloai . "' WHERE theloai.ma_tloai = " . $id;
        $stm = $pdo->prepare($sql);
        $stm->execute();
    }
}
