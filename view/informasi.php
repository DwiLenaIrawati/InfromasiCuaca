<div id="informasi" style="font-family: 'Quicksand', sans-serif;">
	<div class="w3-container" id="subtitle">
		<form action="informasi" method="GET">
			<a id="kota" style="font-size:x-large;text-decoration:none">Kota</a>
			<a id="select">
				<select name="kota" id="dropdown_kota">
					<option disabled selected> Pilih </option>
					<?php

					foreach ($param as $list) {
					?>
						<option value="<?= $list['Location'] ?>"><?= $list['Location'] ?></option>
					<?php
					}
					?>
				</select>
			</a>
			<a class="date"><input type="date" name="fr_date"> </a>
			<span>s.d</span>
			<a class="date"><input type="date" name="to_date"> </a>
			<button id="grafik" class="w3-button w3-flat-belize-hole  w3-round">Search</button>
		</form>
	</div>

	<div id="hasil" style="color: #629AAE;">

		<?php
			if ($kota != null) {
		?>

			<h2 id="namKot" name="kota">
				Nama Kota : <?php echo $kota; ?>
			</h2>

			<h2 id="rentangWaktu">Rentang Waktu : </h2>

			<div id = "infoKanan" style="display:flex; flex-direction: row">
				
				<h2 id= "tgl1" name="fr">
					<?php echo $fr; ?>
				</h2>

				<span id = "sd" style = "font-size:2rem;" >s.d</span>

				<h2 id= "tgl2" name="to">
					<?php echo $to; ?>
				</h2>
			</div>
			
			

			<?php
				session_start();
				$_SESSION['kota'] = $kota;
				$_SESSION['fr'] = $fr;
				$_SESSION['to'] = $to;
		}

				foreach ($param2 as $temp => $list) {
					$temp3pm = $list->getTemp3pm();
					$temp9am = $list->getTemp9am();
					$date = $list->getDate();
					$location = $list->getLocation();
					$windspeed9am = $list->getWindspeed9am();
					$windspeed3pm = $list->getWindspeed3pm();
					$raintoday = $list->getRaintoday();
					if ($raintoday == 'No') {
						$hujan = "Tidak";
					} else {
						$hujan = "Ya";
					}
					$rainfall = $list->getRainfall();
					$humidity9am = $list->getHumidity9am();
					$humidity3pm = $list->getHumidity3pm();
			?>

			<div class="w3-container" style = "margin-top: 3rem;">

				<div class="w3-row w3-container">
					<div class="w3-row">
						<div class="w3-col m2 w3-center">
							<div id="date">
								<p id="valueDate"><?php echo $date ?></p>
							</div>
							<div id="suhu" style="font-size:x-large;">
								<p id="valueSuhu"><?php echo $temp9am ?>C</p>
							</div>
						</div>
						<div class="w3-col m2 w3-center">
							<br>
							<div id="waktu" style="font-size:large;color: #629AAE;">
								<p>Pagi</p>
							</div>
						</div>
						<div class="w3-col m2 w3-center">
							<div id="angin">
								<a><i class="fas fa-wind fa-2x"></i></a>
								<p>Kecepatan Angin</p>
								<p id="valueAngin"><?php echo $windspeed9am ?></p>
							</div>
						</div>
						<div class="w3-col m2 w3-center">
							<div id="hujan">
								<a><i class="fas fa-umbrella fa-2x"></i></a>
								<p>Hujan</p>
								<p id="valueHujan"><?php echo $hujan ?></p>
							</div>
						</div>
						<div class="w3-col m2 w3-center">
							<div id="curah">
								<a><i class="fa fa-solid fa-cloud fa-2x"></i></a>
								<p>Curah Hujan</p>
								<p id="valueCurah"><?php echo $rainfall ?></p>
							</div>
						</div>
						<div class="w3-col m2 w3-center">
							<div id="kelembapan">
								<a><i class="fas fa-tint fa-2x"></i></a>
								<p>Kelembapan</p>
								<p id="valueKelembapan"><?php echo $humidity9am ?></p>
							</div>
						</div>
					</div>
					<hr>
					<div class="w3-row">
						<div class="w3-col m2 w3-center">
							<div id="date">
								<p id="valueDate"><?php echo $date ?></p>
							</div>
							<div id="suhu" style="font-size:x-large;">
								<p id="valueSuhu"><?php echo $temp3pm ?>C</p>
							</div>
						</div>
						<div class="w3-col m2 w3-center">
							<br>
							<div id="waktu" style="font-size:large;color: #629AAE;">
								<p>Sore</p>
							</div>
						</div>
						<div class="w3-col m2 w3-center">
							<div id="angin">
								<a><i class="fas fa-wind fa-2x"></i></a>
								<p>Kecepatan Angin</p>
								<p id="valueAngin"><?php echo $windspeed3pm ?></p>
							</div>
						</div>
						<div class="w3-col m2 w3-center">
							<div id="hujan">
								<a><i class="fas fa-umbrella fa-2x"></i></a>
								<p>Hujan</p>
								<p id="valueHujan"><?php echo $hujan ?></p>
							</div>
						</div>
						<div class="w3-col m2 w3-center">
							<div id="curah">
								<a><i class="fa fa-cloud fa-2x"></i></a>
								<p>Curah Hujan</p>
								<p id="valueCurah"><?php echo $rainfall ?></p>
							</div>
						</div>
						<div class="w3-col m2 w3-center">
							<div id="kelembapan">
								<a><i class="fas fa-tint fa-2x"></i></a>
								<p>Kelembapan</p>
								<p id="valueKelembapan"><?php echo $humidity3pm ?></p>
							</div>
						</div>
					</div>
					<hr>
				</div>
			</div>
		<?php

			}
		?>

	</div>
	<form action="grafik" method="GET">
		<button id="grafik" class="w3-button w3-flat-belize-hole  w3-round" style="margin-left: 1200px;">Grafik</button>
	</form>
</div>