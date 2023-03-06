<?php
include('./services/article/ArticleService.php');

class HomeController
{
    public function index()
    {
        $articleService = new ArticleService();
        $articles = $articleService->getAllArticles();
        // //include('../views/article/articles.php');
        include('./views/article/articles.php');
    }
}
