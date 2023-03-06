<?php


class ArticleService
{
    // Chứa các hàm tương tác và xử lý dữ liệu

    public function getAllArticles()
    {
        // Bước 01: Kết nối DB Server
        // try {
        //     $conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306', 'root', '');
        // } catch (PDOException $e) {
        //     echo $e->getMessage();
        // }
        //include('../config/connectDB.php');
        // Bước 02: Truy vấn DL
        $pdo = connectdb();
        $sql = "SELECT * FROM baiviet";
        //$conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306', 'root', '');
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        // Bước 03: Trả về dữ liệu
        $articles = $stmt->fetchAll();
        // Sửa ở đây; Trả về 1 danh sách (Mảng) các ĐỐI TƯỢNG Article;

        return $articles;
    }

    public function addArticles()
    {
        $tieude = $_POST['tieude'];
        $tomtat = $_POST['tomtat'];
        $baihat = $_POST['baihat'];
        $ngayviet = $_POST['ngayviet'];
        $matacgia = $_POST['matacgia'];
        $matheloai = $_POST['matheloai'];

        $pdo = connectdb();
        //$pdo = connectdb();
        $sql = "INSERT INTO baiviet(tieude,ten_bhat,ma_tloai,tomtat,ma_tgia,ngayviet) values('" . $tieude . "','" . $baihat . "','" . $matheloai . "','" . $tomtat . "','" . $matacgia . "','" . $ngayviet . "') ";
        $stm = $pdo->prepare($sql);
        $stm->execute();
    }

    public function getArticleById()
    {
        $id = $_GET['id'];
        $pdo = connectdb();
        $stmt = $pdo->prepare("SELECT * FROM baiviet where baiviet.ma_bviet = " . $id);
        $stmt->execute();
        $article = $stmt->fetchAll();

        return $article;
    }
}
