<?php
    $url = $_SERVER['REDIRECT_URL'];
    $base = '/InformasiCuaca/';
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
		switch($url){
			case $base."homepage":																	
				require_once 'controller/homePageController.php';
				$page = new homePageController();
				echo $page->viewHome();
			break;
			case $base."informasi":
				require_once 'controller/informasiController.php';
				$page = new informasiController();
				echo $page->viewInformasi();
				break;
			case $base."grafik":
				require_once 'controller/grafikController.php';
				$page = new grafikController();
				echo $page->viewGrafik();
				break;	
				
	}}
