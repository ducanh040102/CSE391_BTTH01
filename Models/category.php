<?php


function getCategory(){
    $pdo = connectdb();   
    $stmt = $pdo->prepare("SELECT * FROM theloai");
    $stmt->execute();
    $category = $stmt->fetchAll();

    return $category;
}

function deleteCategory($id){
    $pdo = connectdb(); 
    $sql = "DELETE FROM theloai WHERE theloai.ma_tloai =".$id;
    $pdo->query($sql);
}

function getId($id){
    $pdo = connectdb();   
    $stmt = $pdo->prepare("SELECT * FROM theloai where theloai.ma_tloai = ".$id);
    $stmt->execute();
    $category = $stmt->fetchAll();

    return $category;
}

function updateCategory($id, $tentheloai){
    $pdo = connectdb();   
    $sql = "UPDATE theloai SET theloai.ten_tloai = '". $tentheloai ."' WHERE theloai.ma_tloai = ".$id;
    $pdo->query($sql);
}

function addCategory($tentheloai){
    $pdo = connectdb();   
    $sql = "INSERT INTO theloai(ten_tloai) values('".$tentheloai."') ";
    $pdo->query($sql);
}

?>