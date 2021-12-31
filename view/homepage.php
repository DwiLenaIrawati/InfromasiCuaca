<head>
<link rel="stylesheet" href="js/slideshow.js">
</head>
<div style=" background-color: #f1fffe;">
    <div class="carousel-container">	
        <div class="images slides">
            <img src="asset/6.png" style="width: 100%">
        </div>
                
        <div class="images slides">
            <img src="asset/7.png" style="width: 100%">
        </div>
    </div>


    <div class="prediksi" style="margin-top: 50px;">
        <div class="w3-container">
            <div class="w3-row-padding">
                <h1 style=" font-family: 'Life Savers', cursive;">Prediction </h1>
                <form >
                    <div class="w3-row-padding" style="font-family: 'Quicksand', sans-serif;font-size:large;">
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
                    <!-- <img src="asset/todayRain.gif" style="width: 100%">
                    <img src="asset/tomorrowRain.gif" style="width: 100%">
                    <img src="asset/todaySunny.gif" style="width: 100%">
                    <img src="asset/TomorrowSunny.gif" style="width: 100%"> -->
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
            }
        ?>
    </div>

        <div id="result">
        <div class="hasil">
                <div class="w3-container">
                <!-- <p class="hari">Today</p> -->
                    <i class="fa fa-cloud-showers-heavy fa-6x"></i>
                    <?php
                        if(isset($tmp)){
                                if($tmp[1] == 0){
                                    // echo "No";
                                    echo "<img src=\"asset/TodaySunny.gif\" style=\"width: 75%\">";
                                }
                                else if($tmp[1] == 1){
                                    // echo "Yes";
                                    echo "<img src=\"asset/TodayRain.gif\" style=\"width: 75%\">";
                                }
                            }
                    ?>
                </div>
        </div>
        <div class="hasil">
                <div class="w3-container">
                    <!-- <p class="hari">Tomorrow</p> -->
                    <i class="fa fa-cloud-showers-heavy fa-6x"></i>
                    <?php
                    if(isset($tmp)){
                                if($tmp[4] == 0){
                                    //echo "No";
                                    echo "<img src=\"asset/TomorrowSunny.gif\" style=\"width: 75%\">";
                                }
                                else if($tmp[4] == 1){
                                    //echo "Yes";
                                    echo "<img src=\"asset/TomorrowRain.gif\" style=\"width: 75%\">";
                                }
                            }
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>

