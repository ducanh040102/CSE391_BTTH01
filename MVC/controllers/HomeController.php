<?php
    include("services/home/HomeService.php");
    class HomeController{
        public function index(){
            // Tương tác với Services/Models
            $homeService = new HomeService();
            $homes = $homeService->getAllHomes();
            // Tương tác với View
            include("views/home/index.php");
        }
    }

?>