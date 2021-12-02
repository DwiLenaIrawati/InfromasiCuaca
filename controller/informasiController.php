<?php
    require_once 'controller/services/view.php';
    
    class informasiController {

        public function viewInformasi(){
            return View::createView('informasi.php',[],'layout.php');
        }

    }
?>