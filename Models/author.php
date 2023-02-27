<?php

function getauthor(){
    $pdo = connectdb();   
    $stmt = $pdo->prepare("SELECT * FROM tacgia");
    $stmt->execute();
    $author = $stmt->fetchAll();

    return $author;
}

function getAuthorID($id){
    $pdo = connectdb();   
    $stmt = $pdo->prepare("SELECT * FROM tacgia where tacgia.ma_tgia = ".$id);
    $stmt->execute();
    $author = $stmt->fetchAll();
    return $author;
}

function updateAuthor($id, $tentacgia){
    $pdo = connectdb();   
    $sql = "UPDATE tacgia SET tacgia.ten_tgia = '". $tentacgia ."' WHERE tacgia.ma_tgia = ".$id;
    $pdo->query($sql);
}

function addAuthor($tentacgia){
    $pdo = connectdb();   
    $sql = "INSERT INTO tacgia(ten_tgia) values('".$tentacgia."') ";
    $pdo->query($sql);
}

?>