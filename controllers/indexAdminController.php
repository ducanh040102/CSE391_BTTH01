<?php
include('./services/admin/indexAdminService.php');

class indexAdminController
{
    public function index()
    {
        $indexAdminController = new indexAdminService();
        $categories = $indexAdminController->countCategory();
        $authors = $indexAdminController->countAuthor();
        $articles  = $indexAdminController->countArticle();
        include('./views/admin/indexAdmin.php');
    }
}
