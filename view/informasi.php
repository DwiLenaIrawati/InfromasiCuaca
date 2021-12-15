<div id="informasi">

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
            foreach ($param2 as $temp => $list) {
				$maxtemp = $list -> getMaxtemp();
				$mintemp = $list -> getMintemp();
				$date = $list ->getDate();
                $location = $list->getLocation();
				$windspeed9am = $list->getWindspeed9am();
				$windspeed3pm =$list -> getWindspeed3pm();
				$raintoday = $list -> getRaintoday();
				if($raintoday=='No'){
					$hujan="Tidak";
				}else{
					$hujan="Ya";
				}
				$rainfall = $list -> getRainfall();
				$humidity9am =$list -> getHumidity9am();
				$humidity3pm =$list -> getHumidity3pm();
             ?>
		<div class="w3-container">
		
			<div class="w3-row w3-container">
				<div class="w3-row">
					<div class="w3-col m2 w3-center">
						<div id="date">
							<p id="valueDate"><?php echo $date ?></p>
						</div>
						<div id="suhu" style="font-size:x-large;">
							<p id="valueSuhu"><?php echo $mintemp?>C s.d <?php echo $maxtemp?>C</p>
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
							<p id="valueAngin"><?php echo $windspeed9am?></p>
						</div>
					</div>
					<div class="w3-col m2 w3-center">
						<div id="hujan">
							<a><i class="fas fa-umbrella fa-2x"></i></a>
							<p>Hujan</p>
							<p id="valueHujan"><?php echo $hujan?></p>
						</div>
					</div>
					<div class="w3-col m2 w3-center">
						<div id="curah">
							<a><i class="fas fa-cloud-rain fa-2x"></i></a>
							<p>Curah Hujan</p>
							<p id="valueCurah"><?php echo $rainfall?></p>
						</div>
					</div>
					<div class="w3-col m2 w3-center">
						<div id="kelembapan">
							<a><i class="fas fa-tint fa-2x"></i></a>
							<p>Kelembapan</p>
							<p id="valueKelembapan"><?php echo $humidity9am?></p>
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
						<p id="valueSuhu"><?php echo $mintemp?>C s.d <?php echo $maxtemp?>C</p>
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
							<p id="valueAngin"><?php echo $windspeed3pm?></p>
						</div>
					</div>
					<div class="w3-col m2 w3-center">
						<div id="hujan">
							<a><i class="fas fa-umbrella fa-2x"></i></a>
							<p>Hujan</p>
							<p id="valueHujan"><?php echo $hujan?></p>
						</div>
					</div>
					<div class="w3-col m2 w3-center">
						<div id="curah">
							<a><i class="fas fa-cloud-rain fa-2x"></i></a>
							<p>Curah Hujan</p>
							<p id="valueCurah"><?php echo $rainfall?></p>
						</div>
					</div>
					<div class="w3-col m2 w3-center">
						<div id="kelembapan">
							<a><i class="fas fa-tint fa-2x"></i></a>
							<p>Kelembapan</p>
							<p id="valueKelembapan"><?php echo $humidity3pm?></p>
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
	<button id="grafik" class="w3-button w3-flat-belize-hole  w3-round" style="margin-left: 1200px;">Grafik</button>
</div>