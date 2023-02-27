<?php

include('./models/connectdb.php');
include('./models/category.php');
include('./models/author.php');
include('./models/article.php');
include('./models/showData.php');

include('./views/includes/admin-header.php');



if(isset($_GET['act'])){
    switch($_GET['act']){
        case 'theloai':
            $categories = getCategory();
            include './views/admin/category.php';
            break;
        case 'deleteCategory';
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                deleteCategory($id);
            }
            $categories = getCategory();
            include './views/admin/category.php';
            break;
        case 'updateCategory';
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $category = getId($id);
                include './views/admin/updateCategory.php';
            }
            if(isset($_POST['matheloai'])){
                $id = $_POST['matheloai'];
                $tentheloai = $_POST['tentheloai'];
                updateCategory($id,$tentheloai);
                $categories = getCategory();
                include './views/admin/category.php';
            }
            break;
        case 'addCategory';
            if(isset($_POST['tentheloai'])){
                $tentheloai = $_POST['tentheloai'];
                addCategory($tentheloai);
            }
            $categories = getCategory();
            include './views/admin/category.php';
            break;
        case 'add_category';
            include './views/admin/add_category.php';
            break;
//////////////////////////////////// 
        case 'tacgia':
            $authors = getauthor();
            include './views/admin/author.php';
            break;
        case 'updateAuthor';
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $author = getAuthorID($id);
                include './views/admin/updateAuthor.php';
            }
            if(isset($_POST['matacgia'])){
                $id = $_POST['matacgia'];
                $tentacgia = $_POST['tentacgia'];
                updateAuthor($id,$tentacgia);
                $authors = getauthor();
                include './views/admin/author.php';
            }
            break;
        case 'addAuthor';
            if(isset($_POST['tentacgia'])){
                $tentacgia = $_POST['tentacgia'];
                addAuthor($tentacgia);
            }
            $authors = getauthor();
            include './views/admin/author.php';
            break;
        case 'add_author';
            include './views/admin/add_author.php';
            break;
////////////////////////////////////            
        case 'baiviet';
            $articles = getarticle();
            include './views/admin/article.php';
            break;
        case 'updateArticle';
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $article = getArticleID($id);
                include './views/admin/updateArticle.php';
            }
            if(isset($_POST['mabaiviet'])){
                $id = $_POST['mabaiviet'];
                $tieude = $_POST['tieude'];
                $tenbaihat = $_POST['tenbaihat'];
                $tomtat = $_POST['tomtat'];
                $ngayviet = $_POST['ngayviet'];
                updateArticle($id,$tieude,$tenbaihat,$tomtat,$ngayviet);
                $articles = getarticle();
                include './views/admin/article.php';
            }
            break;
////////////////////////////////////         
        
        case 'addArticle';
            include './views/admin/add_article.php';
            break;
    }
}else{
    $showArticle = countArticles();
    $showCategory = countCategory();
    $showAuthor = countAuthor();
    include('./views/admin/index.php');
}



include('./views/includes/admin-footer.php');

?>