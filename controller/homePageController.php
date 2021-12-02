<?php
    require_once 'controller/services/view.php';
    
    class homePageController {

        public function viewHome(){
            return View::createView('homepage.php',[],'layout.php');
        }

    }
?>