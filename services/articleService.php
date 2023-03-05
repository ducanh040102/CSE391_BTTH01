<?php
class articleService
{
    public function getArticle()
    {
        $pdo = connectdb();
        $stmt = $pdo->prepare("SELECT * FROM baiviet");
        $stmt->execute();
        $article = $stmt->fetchAll();

        return $article;
    }

    // public function addAuthorService($tentacgia)
    // {
    //     $pdo = connectdb();
    //     $sql = "INSERT INTO tacgia(ten_tgia) values('" . $tentacgia . "') ";
    //     $stm = $pdo->prepare($sql);
    //     $stm->execute();
    // }

    public function getIdArticleService($id)
    {
        $pdo = connectdb();
        $stmt = $pdo->prepare("SELECT * FROM baiviet where baiviet.ma_bviet = " . $id);
        $stmt->execute();
        $article = $stmt->fetchAll();

        return $article;
    }

    public function updateArticleService($id, $tieude, $tenbaihat, $tomtat, $ngayviet)
    {
        $pdo = connectdb();
        $sql = "UPDATE baiviet SET baiviet.tieude = '" . $tieude . "', baiviet.ten_bhat = '" . $tenbaihat . "', baiviet.tomtat = '" . $tomtat . "', baiviet.ngayviet = '" . $ngayviet . "' WHERE baiviet.ma_bviet = " . $id;
        $stm = $pdo->prepare($sql);
        $stm->execute();
    }
}
