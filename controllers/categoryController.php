<?php
include('./services/category/categoryService.php');

class categoryController
{
    public function index()
    {
        $categoryService = new categoryService();
        $categories = $categoryService->getAllCategories();
        // //include('../views/article/articles.php');
        include('./views/category/category.php');
    }

    public function add()
    {
        // Tương tác với Services/Models
        //$categories = 'Categories from ArticeServices';
        // Tương tác với View
        include('./views/category/add_category.php');
    }

    public function addcategory()
    {
        $categoryService = new  categoryService();
        $categoryService->addCategory();
        $categories = $categoryService->getAllCategories();
        header('location:index.php?controller=category');
    }

    public function getCategoryById()
    {
        $CategoryService = new  categoryService();
        $category = $CategoryService->getCategoryById();
        include('./views/category/updateCategory.php');
    }

    public function updateCategoryById()
    {
        $categoryService = new  categoryService();
        $category = $categoryService->updateCategoryById();
        $categories = $categoryService->getAllCategories();
        header('location:index.php?controller=category');
    }
}
