<?php
class articleController
{

    public function index()
    {
        $articleController = new articleService();
        $articles =  $articleController->getArticle();
        return $articles;
    }

    // public function addAuthor($tentacgia)
    // {
    //     $authorController = new authorService();
    //     $authors = $authorController->addAuthorService($tentacgia);
    // }

    public function getIdArticle($id)
    {
        $articleController = new articleService();
        $article = $articleController->getIdArticleService($id);
        return $article;
    }

    public function updateArticle($id, $tieude, $tenbaihat, $tomtat, $ngayviet)
    {
        $articleController = new articleService();
        $article = $articleController->updateArticleService($id, $tieude, $tenbaihat, $tomtat, $ngayviet);
    }
}
