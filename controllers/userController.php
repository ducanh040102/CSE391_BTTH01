<?php
include('./services/user/userService.php');


class userController
{
    public function index()
    {
        $userService = new userService();
        $users =  $userService->getAllUsers();
        // //include('../views/article/articles.php');
        include('./views/user/user.php');
    }

    public function add()
    {
        include("./views/user/add_user.php");
    }

    public function addUser()
    {
        $userService = new userService();
        $user = $userService->addUser();
        $users = $userService->getAllUsers();
        header('location:index.php?controller=user');
    }

    public function getUserById()
    {
        $userService = new userService();
        $user = $userService->getUserById();
        include('./views/user/updateUser.php');
    }

    public function updateUserById()
    {
        $userService = new userService();
        $user = $userService->updateUserById();
        $users = $userService->getAllUsers();
        header('location:index.php?controller=user');
    }
}

// $articleService = new ArticleService();
// $articles = $articleService->getAllArticles();
// echo var_dump($articles);


// $test = new ArticleController();
// $test1 = $test->index();
// echo $test1;
