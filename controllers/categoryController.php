<?php
// include('../services/categoryService.php');

class categoryController
{

    public function index()
    {
        $categoriesController = new categoryService();
        $categories = $categoriesController->getCategory();
        return $categories;
    }

    public function addCategory($tentheloai)
    {
        $categoriesController = new categoryService();
        $categories = $categoriesController->addCategoryService($tentheloai);
    }

    public function getIdCategory($id)
    {
        $categoriesController = new categoryService();
        $category = $categoriesController->getIdCategoryService($id);
        return $category;
    }

    public function updateCategory($id, $tentheloai)
    {
        $categoriesController = new categoryService();
        $category = $categoriesController->updateCategoryService($id, $tentheloai);
    }
}
