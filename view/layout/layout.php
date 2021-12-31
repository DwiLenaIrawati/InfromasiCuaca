<html>
<head>
	<title>Informasi cuaca</title>
	
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="lib/font-awesome.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
		<link rel="stylesheet" href="css/layout.css">
		<link rel="stylesheet" href="css/homepage.css">
		<link rel="stylesheet" href="css/informasi.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Life+Savers:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&family=Quicksand&display=swap" rel="stylesheet">
		
</head>
<body style=" font-family: 'Quicksand', sans-serif;">
	<!-- Header -->
	<div class="w3-container w3-flat-belize-hole ">
			<div class="w3-container w3-cell">
			
				<h1 id="title" style=" font-family: 'Life Savers', cursive;text-shadow: 3px 3px 3px #ababab;">Weather</h1>	
			</div>
			<div class="w3-container w3-cell">
				<nav >
					<div id="nav" class="w3-bar w3-bar-item w3-flat-belize-hole" style="  margin: 16px 0px 0px 170px;">
						<a class="link" href="homepage" style="text-decoration: none;">Prediksi Hujan</a>
						<a class="link" href="informasi" style="text-decoration: none;">Informasi Cuaca</a>	
					</div>
				</nav>		
			</div>
		</div>
	<?php 
	// if(isset($_GET['page'])){
	// 	$page = $_GET['page'];
 
	// 	switch ($page) {
	// 		case 'homepage':
	// 			include "homepage.php";
	// 			break;
	// 		case 'informasi':
	// 			include "informasi.php";
	// 			break;
	// 		case 'grafik':
	// 			include "grafik.php";
	// 			break;			
	// 		default:
	// 			echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
	// 			break;
	// 	}
	// // }else{
	// // 	include "homepage.php";
	// // }
	

    echo $content;
	 ?>
