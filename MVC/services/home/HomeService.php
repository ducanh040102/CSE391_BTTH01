<?php
    class HomeService{
        // Chứa các hàm tương tác và xử lý dữ liệu

        public function getAllHomes(){
            // Bước 01: Kết nối DB Server
            try {
                $conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306','root','');
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            // Bước 02: Truy vấn DL
            $sql = "SELECT * FROM baiviet;";
            //echo $sql;
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Bước 03: Trả về dữ liệu
            $homes = $stmt->fetchAll();
            // Sửa ở đây; Trả về 1 danh sách (Mảng) các ĐỐI TƯỢNG Article;

            return $homes;
        }
    }

?>