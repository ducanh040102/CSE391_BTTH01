<?php

function getarticle(){
    $pdo = connectdb();   
    $stmt = $pdo->prepare("SELECT * FROM baiviet");
    $stmt->execute();
    $article = $stmt->fetchAll();

    return $article;
}

function getArticleID($id){
    $pdo = connectdb();   
    $stmt = $pdo->prepare("SELECT * FROM baiviet where baiviet.ma_bviet = ".$id);
    $stmt->execute();
    $article = $stmt->fetchAll();

    return $article;
}

function updateArticle($id,$tieude,$tenbaihat,$tomtat,$ngayviet){
    $pdo = connectdb();   
    $sql = "UPDATE baiviet SET baiviet.tieude = '". $tieude ."', baiviet.ten_bhat = '".$tenbaihat."', baiviet.tomtat = '".$tomtat ."', baiviet.ngayviet = '".$ngayviet."' WHERE baiviet.ma_bviet = ".$id;
    $pdo->query($sql);
}


?>