<?php
//to fetch reviews from the database

class Reviews{
    public $db=null;
    public function __construct(DBController $db){
        if(!isset($db->con))return null;
        $this->db=$db;
    }
    // fetch reviews using getData Method
    public function getData($table='reviews'){
        $result= $this->db ->con->query("SELECT * FROM {$table}");
        $resultArray= array();

        // fetch reviews one by one
        while ($review=mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[]=$review;
        }
        return $resultArray;
    }
}
?>