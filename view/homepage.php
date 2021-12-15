<head>
<link rel="stylesheet" href="js/slideshow.js">
</head>
<div class="carousel-container">	
	<div class="images slides">
		<img src="asset/1.png" style="width: 100%">
	</div>
			
	<div class="images slides">
		<img src="asset/2.png" style="width: 100%">
	</div>
</div>

<div class="prediksi">
    <div class="w3-container">
        <div class="w3-row-padding">
            <form >
            
                <div class="w3-row-padding">
                    <div class="w3-third">
                        <label>Humidity 9am</label>
                        <input class="w3-input w3-border" name ="humidity9" type="text" >
                    </div>
                    <div class="w3-third">
                        <label>Humidity 3pm</label>
                        <input class="w3-input w3-border" name ="humidity3" type="text" >
                    </div>
                    <div class="w3-third">
                        <label>Rainfall</label>
                        <input class="w3-input w3-border" name ="rainfall" type="text" >
                    </div>
                    <div class="w3-third">
                        <label>Sunshine</label>
                        <input class="w3-input w3-border" name ="sunshine" type="text" >
                    </div>
                    <div class="w3-third">
                        <label>Cloud 3pm</label>
                        <input class="w3-input w3-border" name ="cloud" type="text" >
                    </div>
                    
                
            </form>
                    <div class="w3-third" style="margin-top:10px">
                        <button id="submit"class="w3-button w3-flat-belize-hole  w3-round" >Submit</button>
                    </div>
                </div>
        </div>
    </div>
    <?php
        if(isset($_GET["humidity9"]) && isset($_GET["humidity3"]) && isset($_GET["rainfall"]) && isset($_GET["sunshine"]) && isset($_GET["cloud"]) ){
            $a=$_GET["humidity9"];
            $b=$_GET["humidity3"];
            $c=$_GET["rainfall"];
            $d=$_GET["sunshine"];
            $e=$_GET["cloud"];
        
            $tmp = exec("C:/xampp/htdocs/InformasiCuaca/predict/env/Scripts/python C:/xampp/htdocs/InformasiCuaca/predict/model.py 2>&1".$a." ".$b." ".$c." ".$d." ".$e);
            echo var_dump($tmp);
            //echo var_dump($tmp);
            //echo $tmp[1];
            //echo $tmp[4];

            // if($tmp[4] == 0){
            //     echo "No";
            // }
            // else{
            //     echo "Yes";
            // }
            
        }
    ?>
</div>
<!-- <div class="lala">
    <p>test</p>
</div> -->
   <div id="result">
       <div class="hasil">
            <div class="w3-container">
                <p class="hari">Today</p>
                <i class="fa fa-cloud-showers-heavy fa-6x"></i>
                <?php
                    if(isset($tmp)){
                            if($tmp[1] == 0){
                                echo "No";
                            }
                            else if($tmp[1] == 1){
                                echo "Yes";
                            }
                        }
                ?>
            </div>
       </div>
       <div class="hasil">
            <div class="w3-container">
                <p class="hari">Tomorrow</p>
                <i class="fa fa-cloud-showers-heavy fa-6x"></i>
                <?php
                if(isset($tmp)){
                            if($tmp[4] == 0){
                                echo "No";
                            }
                            else if($tmp[4] == 1){
                                echo "Yes";
                            }
                        }
                ?>
            </div>
        </div>
    </div>
</div>