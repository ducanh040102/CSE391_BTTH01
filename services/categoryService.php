<?php
class categoryService
{
    public function getCategory()
    {
        $pdo = connectdb();
        $stmt = $pdo->prepare("SELECT * FROM theloai");
        $stmt->execute();
        $category = $stmt->fetchAll();

        return $category;
    }

    public function addCategoryService($tentheloai)
    {
        $pdo = connectdb();
        $sql = "INSERT INTO theloai(ten_tloai) values('" . $tentheloai . "') ";
        $stm = $pdo->prepare($sql);
        $stm->execute();
    }

    public function getIdCategoryService($id)
    {
        $pdo = connectdb();
        $stmt = $pdo->prepare("SELECT * FROM theloai where theloai.ma_tloai = " . $id);
        $stmt->execute();
        $category = $stmt->fetchAll();

        return $category;
    }

    public function updateCategoryService($id, $tentheloai)
    {
        $pdo = connectdb();
        $sql = "UPDATE theloai SET theloai.ten_tloai = '" . $tentheloai . "' WHERE theloai.ma_tloai = " . $id;
        $stm = $pdo->prepare($sql);
        $stm->execute();
    }
}
