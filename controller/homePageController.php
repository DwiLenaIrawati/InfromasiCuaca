<?php
    require_once 'controller/services/view.php';
    include('services/mysqlDB.php');
    class homePageController {
        protected $db;
        function __construct(){
            $this->db = new MySQLDB("localhost", "root", "", "virma");
        }
        public function viewHome(){
        
            return View::createView('homepage.php',[],'layout.php');
        }
        
        
    }
?>