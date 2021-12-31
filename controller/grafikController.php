<?php
    require_once 'controller/services/view.php';
    include('services/mysqlDB.php');
    include 'model/weatheraus.php';
    class grafikController {
        function __construct()
        {
            $this->db = new MySQLDB("localhost", "root", "", "weatheraus_clean");
        }
        public function viewGrafik(){
            session_start();
            $kota= $_SESSION['kota'];
            $fr=$_SESSION['fr'];
            $to=$_SESSION['to'];
          
            $result= $this-> searchKota($kota,$fr,$to);
      
            return View::createViewGrafik('grafik.php',$result,$kota,$fr,$to,'layout.php');
        }
        public function searchKota($kota,$fr,$to)
        {
            $query= "SELECT * FROM weatheraus_clean WHERE Location='$kota' AND Date >='$fr' AND Date <='$to'";
    
            $select = $this->db->executeSelectQuery($query);
            $result = [];
            foreach ($select as $value) {
                $result[] = new weatheraus(
                    $value['Date'],
                    $value['Location'],
                    $value['MinTemp'],
                    $value['MaxTemp'],
                    $value['Rainfall'],
                    $value['Evaporation'],
                    $value['Sunshine'],
                    $value['WindGustDir'],
                    $value['WindGustSpeed'],
                    $value['WindDir9am'],
                    $value['WindDir3pm'],
                    $value['WindSpeed9am'],
                    $value['WindSpeed3pm'],
                    $value['Humidity9am'],
                    $value['Humidity3pm'],
                    $value['Pressure9am'],
                    $value['Pressure3pm'],
                    $value['Cloud9am'],
                    $value['Cloud3pm'],
                    $value['Temp9am'],
                    $value['Temp3pm'],
                    $value['RainToday'],
                    $value['RainTomorrow']
                );
            }
            
            return $result;
        }

    }
?>