<?php
include('./services/article/ArticleService.php');
include('./services/author/authorService.php');
include('./services/category/categoryService.php');

class ArticleController
{
    public function index()
    {
        $articleService = new ArticleService();
        $articles = $articleService->getAllArticles();
        // //include('../views/article/articles.php');
        include('./views/article/articles.php');
    }

    public function add()
    {
        $authorService = new  authorService();
        $authors = $authorService->getAllAuthors();
        $categoryService = new categoryService();
        $categories = $categoryService->getAllCategories();
        include("views/article/add_article.php");
    }

    public function addArticle()
    {
        $articleService = new ArticleService();
        $article = $articleService->addArticles();
        $articles = $articleService->getAllArticles();
        header('location:index.php?controller=article');
    }

    public function getArticleById()
    {
        $articleService = new ArticleService();
        $article = $articleService->getArticleById();
        $authorService = new  authorService();
        $authors = $authorService->getAllAuthors();
        $CategoryService = new categoryService();
        $categories = $CategoryService->getAllCategories();
        include('./views/article/updateArticle.php');
    }
}

// $articleService = new ArticleService();
// $articles = $articleService->getAllArticles();
// echo var_dump($articles);


// $test = new ArticleController();
// $test1 = $test->index();
// echo $test1;
