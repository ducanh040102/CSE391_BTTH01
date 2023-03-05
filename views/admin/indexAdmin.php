<?php

// include('./models/connectdb.php');
// include('./models/category.php');
// include('./models/author.php');
// include('./models/article.php');
// include('./models/showData.php');


include('../../config/connectdb.php');
include('../../services/categoryService.php');
include('../../controllers/categoryController.php');

include('../../services/authorService.php');
include('../../controllers/authorController.php');


include('../../services/articleService.php');
include('../../controllers/articleController.php');


include('../../services/indexAdminService.php');
include('../../controllers/indexAdminController.php');


include('../includes/admin-header.php');



$categoriesController = new categoryController();
$authorController = new authorController();
$articleController = new articleController();

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'theloai':
            $categories = $categoriesController->index();
            include '../category/category.php';
            break;
        case 'deleteCategory';
            // if (isset($_GET['id'])) {
            //     $id = $_GET['id'];
            //     deleteCategory($id);
            // }
            // $categories = getCategory();
            // include './views/admin/category.php';
            // break;
        case 'updateCategory';
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $category = $categoriesController->getIdCategory($id);
                include '../category/updateCategory.php';
            }
            if (isset($_POST['matheloai'])) {
                $id = $_POST['matheloai'];
                $tentheloai = $_POST['tentheloai'];
                $category = $categoriesController->updateCategory($id, $tentheloai);
                $categories = $categoriesController->index();
                include '../category/category.php';
            }
            break;
        case 'addCategory';
            if (isset($_POST['tentheloai']) && isset($_POST['btn'])) {
                $tentheloai = $_POST['tentheloai'];
                $categoriesController->addCategory($tentheloai);
            }
            $categories = $categoriesController->index();
            include '../category/getCategory.php';
            break;
        case 'add_category';
            include '../category/add_category.php';
            break;
            //////////////////////////////////// 
        case 'tacgia':
            $authors = $authorController->index();
            include '../author/author.php';
            break;
        case 'updateAuthor';
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $author = $authorController->getIdAuthor($id);
                include '../author/updateAuthor.php';
            }
            if (isset($_POST['matacgia'])) {
                $id = $_POST['matacgia'];
                $tentacgia = $_POST['tentacgia'];
                $authorController->updateAuthor($id, $tentacgia);
                $authors = $authorController->index();
                include '../author/author.php';
            }
            break;
        case 'addAuthor';
            if (isset($_POST['tentacgia'])) {
                $tentacgia = $_POST['tentacgia'];
                $authorController->addAuthor($tentacgia);
            }
            $authors = $authorController->index();
            include '../author/author.php';
            break;
        case 'add_author';
            include '../author/add_author.php';
            break;
            ////////////////////////////////////            
        case 'baiviet';
            $articles = $articleController->index();
            include '../article/article.php';
            break;
        case 'updateArticle';
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $article = $articleController->getIdArticle($id);
                include '../article/updateArticle.php';
            }
            if (isset($_POST['mabaiviet'])) {
                $id = $_POST['mabaiviet'];
                $tieude = $_POST['tieude'];
                $tenbaihat = $_POST['tenbaihat'];
                $tomtat = $_POST['tomtat'];
                $ngayviet = $_POST['ngayviet'];
                $articleController->updateArticle($id, $tieude, $tenbaihat, $tomtat, $ngayviet);
                $articles = $articleController->index();
                include '../article/article.php';
            }
            break;
            ////////////////////////////////////         

        case 'addArticle';
            include './views/admin/add_article.php';
            break;
    }
} else {
    $indexAdminController = new IndexAdminController();
    $categories = $indexAdminController->countCategory();
    $authors = $indexAdminController->countAuthor();
    $articles = $indexAdminController->countArticle();
    // $showArticle = countArticles();
    // $showCategory = countCategory();
    // $showAuthor = countAuthor();
    include('./index.php');
}



include('../includes/admin-footer.php');
