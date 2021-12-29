<?php
require_once 'controller/services/view.php';
include('services/mysqlDB.php');
include 'model/weatheraus.php';
class informasiController
{
    protected $db;
    function __construct()
    {
        $this->db = new MySQLDB("localhost", "root", "", "weatheraus_clean");
    }
    public function viewInformasi()
    {
         if (isset($_GET['kota'])) {
            $city = $_GET['kota'];
         
       
        }
        else{
            $city='';
        
        }
     
        

     $fr="";
     $to="";
        if (isset($_GET['fr_date'])) {
            $fr =date('d/m/Y',strtotime( $_GET['fr_date']));
            $fr = $_GET['fr_date'];
        }
        if (isset($_GET['to_date'])) {      
            $to = date('d/m/Y',strtotime( $_GET['to_date']));
            $to = $_GET['to_date'];
        }
     
        $kota = $this->getKota();


        $result = $this->searchKota($city,$fr,$to);
        return View::createViewInformasi('informasi.php', $kota,$result, $city,$fr,$to, 'layout.php');
    }

    public function getKota()
    {
        $query = "SELECT DISTINCT Location FROM `weatheraus_clean` ORDER BY Location ASC";
        $select = $this->db->executeSelectQuery($query);
        return $select;
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
    //    echo var_dump($select);
    }
}
