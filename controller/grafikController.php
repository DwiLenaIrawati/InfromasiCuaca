<?php
    require_once 'controller/services/view.php';
    include('services/mysqlDB.php');
    class grafikController {

        public function viewGrafik(){
            return View::createView('grafik.php',[],'layout.php');
        }

    }
?>