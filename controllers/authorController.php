<?php
include('./services/author/authorService.php');

class authorController
{
    public function index()
    {
        $authorService = new  authorService();
        $authors = $authorService->getAllAuthors();
        // //include('../views/article/articles.php');
        include('./views/author/author.php');
    }

    public function add()
    {
        // Tương tác với Services/Models
        //$categories = 'Categories from ArticeServices';
        // Tương tác với View
        include('./views/author/add_author.php');
    }
    public function addAuthor()
    {
        $authorService = new  authorService();
        $authorService->addAuthor();
        $authors = $authorService->getAllAuthors();
        header('location:index.php?controller=author');
    }

    public function getAuthorById()
    {
        $authorService = new  authorService();
        $author = $authorService->getAuthorById();
        include('./views/author/updateAuthor.php');
    }

    public function updateAuthorById()
    {
        $authorService = new  authorService();
        $author = $authorService->updateAuthorById();
        $authors = $authorService->getAllAuthors();
        header('location:index.php?controller=author');
    }
}
