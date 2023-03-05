<?php
    include("services/detail/DetailService.php");
    class DetailController{
        public function index(){
            // Tương tác với Services/Models
            $detailService = new DetailService();
            $details = $detailService->getAllDetails();
            // Tương tác với View
            include("views/detail/detail.php");
        }
    }

?>