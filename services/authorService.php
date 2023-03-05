<?php
class authorService
{
    public function getAuthor()
    {
        $pdo = connectdb();
        $stmt = $pdo->prepare("SELECT * FROM tacgia");
        $stmt->execute();
        $author = $stmt->fetchAll();

        return $author;
    }

    public function addAuthorService($tentacgia)
    {
        $pdo = connectdb();
        $sql = "INSERT INTO tacgia(ten_tgia) values('" . $tentacgia . "') ";
        $stm = $pdo->prepare($sql);
        $stm->execute();
    }

    public function getIdAuthorService($id)
    {
        $pdo = connectdb();
        $stmt = $pdo->prepare("SELECT * FROM tacgia where tacgia.ma_tgia = " . $id);
        $stmt->execute();
        $author = $stmt->fetchAll();

        return $author;
    }

    public function updateAuthorService($id, $tentacgia)
    {
        $pdo = connectdb();
        $sql = "UPDATE tacgia SET tacgia.ten_tgia = '" . $tentacgia . "' WHERE tacgia.ma_tgia = " . $id;
        $stm = $pdo->prepare($sql);
        $stm->execute();
    }
}
