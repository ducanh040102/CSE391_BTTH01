<?php
     function countArticles(){
        $pdo = connectdb();   
        $stmt = $pdo->prepare("SELECT COUNT(baiviet.ma_bviet) as sobaiviet FROM baiviet ");
        $stmt->execute();
        $showArticle = $stmt->fetchAll();

        return $showArticle;
     }

     function countAuthor(){
        $pdo = connectdb();   
        $stmt = $pdo->prepare("SELECT COUNT(tacgia.ma_tgia) as sotacgia FROM tacgia ");
        $stmt->execute();
        $showAuthor = $stmt->fetchAll();

        return $showAuthor;
     }

     function countCategory(){
        $pdo = connectdb();   
        $stmt = $pdo->prepare("SELECT COUNT(theloai.ma_tloai) as sotheloai FROM theloai ");
        $stmt->execute();
        $showCategory = $stmt->fetchAll();

        return $showCategory;
     }

?>