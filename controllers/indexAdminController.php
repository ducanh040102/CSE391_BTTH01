<?php

class indexAdminController
{
    public function countCategory()
    {
        $indexAdminController = new indexAdminService();
        $category = $indexAdminController->countCategory();
        return $category;
    }

    public function countAuthor()
    {
        $indexAdminController = new indexAdminService();
        $author = $indexAdminController->countAuthor();
        return $author;
    }

    public function countArticle()
    {
        $indexAdminController = new indexAdminService();
        $article = $indexAdminController->countArticle();
        return $article;
    }
}
