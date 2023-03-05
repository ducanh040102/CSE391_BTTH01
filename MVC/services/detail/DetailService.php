<?php
    class DetailService{
        // Chứa các hàm tương tác và xử lý dữ liệu

        public function getAllDetails(){
            // Bước 01: Kết nối DB Server
            try {
                $conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306','root','');
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            // Bước 02: Truy vấn DL

            $getid  = $_GET['id'];
            $sql    = "SELECT * FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai WHERE baiviet.ma_bviet=".$getid;
            //echo $sql;
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $details = $stmt->fetchAll();
            return $details;
        }
    }

?>