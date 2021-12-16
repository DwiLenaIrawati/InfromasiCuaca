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
        $kota = $this->getKota();


        $result = $this->searchKota();
       // echo var_dump($result);
        return View::createViewInformasi('informasi.php', $kota, $result, 'layout.php');
    }

    public function getKota()
    {
        $query = "SELECT DISTINCT Location FROM `weatheraus_clean`";
        $select = $this->db->executeSelectQuery($query);
        return $select;
    }

    public function searchKota()
    {
        $count=0;
        if (isset($_GET['kota'])) {
            $kota = $_GET['kota'];
            $count=$count+1;
       
        }
        else{
            $kota='';
        
        }
     
        

     $fr="";
     $to="";
        if (isset($_GET['fr_date'])) {
            $fr =date('d/m/Y',strtotime( $_GET['fr_date']));

        }
        
        if (isset($_GET['to_date'])) {
              
            $to = date('d/m/Y',strtotime( $_GET['to_date']));
  
            // if($to=='01/01/1970'){
            //     $to= "30000101";
            // }
        }
     
        // echo $fr;
        // echo $to;
        // $query= "SELECT * FROM weatheraus_clean WHERE Location LIKE'%$kota%' AND Date >='$fr' AND Date <='$to'";
        $query= "SELECT * FROM weatheraus_clean WHERE Location='$kota' AND Date >='$fr' AND Date <='$to'";
     //   $query= "SELECT * FROM weatheraus_clean WHERE Location='$kota' AND Date BETWEEN $fr AND $to";
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
