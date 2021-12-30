<script
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

<h2 style = "font-family: 'Life Savers', cursive;">
  GRAFIK PERKEMBANGAN CUACA DARI HARI KE HARI
</h2>

<div style = "margin-top: 2rem;">
  <h2 id="namKot" name="kota" style = "font-family: 'Quicksand', sans-serif">
      Nama Kota : <?php echo $kota; ?>
  </h2>

  <h2 id="rentangWaktu" style = "font-family: 'Quicksand', sans-serif">Rentang Waktu : </h2>

  <div id = "infoKanan" style="display:flex; flex-direction: row">
      
    <h2 id= "tgl1" name="fr" style = "font-family: 'Quicksand', sans-serif">
      <?php echo $fr; ?>
    </h2>

    <span id = "sd" style = "font-size:2rem; font-family: 'Quicksand', sans-serif; " >s.d</span>

    <h2 id= "tgl2" name="to" style = "font-family: 'Quicksand', sans-serif">
      <?php echo $to; ?>
    </h2>

  </div>
</div>

<div style = "margin:0 auto;">
  <!-- KELEMBAPAN -->
  <div style = "border-style: ridge; margin-left: 0.5rem; margin-top: 1rem; width: 50rem">
    <h3 style = "text-align:center; font-family: 'Quicksand', sans-serif" ">Grafik Line-Chart Kelembapan </h3>
    <canvas id="myChart" style="width:100%;max-width:900px"></canvas>
    <script>
      var xValues= [<?php 
                foreach ($param as $list => $validasi) {
                    $tanggal = $validasi->getDate();

                    echo '"'.$tanggal.'",';
                }?>]
                console.log(xValues);
      new Chart("myChart", {
        type: "line",
        data: {
        labels: xValues,
        datasets: [{
          label: "Kelembapan 9 AM" ,
          data: [<?php 
                foreach ($param as $list => $result) {
                    $humidity = $result->getHumidity9am();

                    echo '"'.$humidity.'",';
                }?>],
          borderColor: "red",
          fill: false
        },{
          label: "Kelembapan 3 PM",  
          data: [<?php 
                foreach ($param as $list => $result) {
                  $humidity = $result->getHumidity3pm();

                    echo '"'.$humidity.'",';
                }?>],
          borderColor: "green",
          fill: false
        }]
      },
      options: {
        legend: {display: true}
      }
    }); 
    </script>
  </div>

  <!-- TEMPERATUR -->
  <div style = "border-style: ridge; margin-left: 0.5rem; margin-top: 1rem; width: 50rem">
    <h3 style = "text-align:center; font-family: 'Quicksand', sans-serif"">Grafik Line-Chart Temperatur </h3>
    <canvas id="myChart_temp" style="width:100%;max-width:900px"></canvas>
    <script>
      var xValues= [<?php 
                foreach ($param as $list => $validasi) {
                    $tanggal = $validasi->getDate();

                    echo '"'.$tanggal.'",';
                }?>]
                console.log(xValues);
    new Chart("myChart_temp", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          label: "Temperatur 9 AM" ,
          data: [<?php 
                foreach ($param as $list => $result) {
                    $temp = $result->getTemp9am();

                    echo '"'.$temp.'",';
                }?>],
          borderColor: "red",
          fill: false
        },{
          label: "Temperatur 3 PM",  
          data: [<?php 
                foreach ($param as $list => $result) {
                  $temp = $result->getTemp3pm();

                    echo '"'.$temp.'",';
                }?>],
          borderColor: "green",
          fill: false
        }]
      },
      options: {
        legend: {display: true}
      }
    }); 
    </script>
  </div>


  <!-- KECEPATAN ANGIN -->
  <div style = "border-style: ridge; margin-left: 0.5rem; margin-top: 1rem; width: 50rem">
    <h3 style = "text-align:center; font-family: 'Quicksand', sans-serif"">Grafik Line-Chart Kecepatan Angin </h3>
    <canvas id="myChart_windSpeed" style="width:100%;max-width:900px"></canvas>
    <script>
      var xValues= [<?php 
                foreach ($param as $list => $validasi) {
                    $tanggal = $validasi->getDate();

                    echo '"'.$tanggal.'",';
                }?>]
                console.log(xValues);
    new Chart("myChart_windSpeed", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          label: "Kecepatan Angin 9 AM" ,
          data: [<?php 
                foreach ($param as $list => $result) {
                    $speed = $result->getWindspeed9am();

                    echo '"'.$speed.'",';
                }?>],
          borderColor: "red",
          fill: false
        },{
          label: "Kecepatan Angin 3 PM",  
          data: [<?php 
                foreach ($param as $list => $result) {
                  $speed = $result->getWindspeed3pm();

                    echo '"'.$speed.'",';
                }?>],
          borderColor: "green",
          fill: false
        }]
      },
      options: {
        legend: {display: true}
      }
    }); 
    </script>
  </div>


  <!-- CURAH HUJAN -->
  <div style = "border-style: ridge; margin-left: 0.5rem; margin-top: 1rem; width: 50rem">
    <h3 style = "text-align:center">Grafik Line-Chart Curah Hujan </h3>
    <canvas id="myChart_curahHujan" style="width:100%;max-width:900px"></canvas>
    <script>
      var xValues= [<?php 
                foreach ($param as $list => $validasi) {
                    $tanggal = $validasi->getDate();

                    echo '"'.$tanggal.'",';
                }?>]
                console.log(xValues);
    new Chart("myChart_curahHujan", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          label: "Curah Hujan" ,
          data: [<?php 
                foreach ($param as $list => $result) {
                    $curah = $result->getRainfall();

                    echo '"'.$curah.'",';
                }?>],
          borderColor: "red",
          fill: false
        }]
      },
      options: {
        legend: {display: true}
      }
    }); 
    </script>
  </div>
</div>