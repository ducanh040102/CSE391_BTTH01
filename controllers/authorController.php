<?php
class authorController
{

    public function index()
    {
        $authorController = new authorService();
        $authors = $authorController->getAuthor();
        return $authors;
    }

    public function addAuthor($tentacgia)
    {
        $authorController = new authorService();
        $authors = $authorController->addAuthorService($tentacgia);
    }

    public function getIdAuthor($id)
    {
        $authorController = new authorService();
        $author = $authorController->getIdAuthorService($id);
        return $author;
    }

    public function updateAuthor($id, $tentacgia)
    {
        $authorController = new authorService();
        $author = $authorController->updateAuthorService($id, $tentacgia);
    }
}
