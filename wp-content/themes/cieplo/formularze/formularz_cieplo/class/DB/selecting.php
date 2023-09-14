<?php

namespace form\formCieplo\class\DB;

require_once('connect_to_db.php');

use PDO;
use PDOException;

class SelectDataFromDB {

    function selectData($columns, $tabel, $clausule, $column,$variable) {
        $arrayResult = array();
        $connection = OpenCon();
        $query = null;
        if($clausule) {
            $query = "SELECT ".$columns." FROM ".$tabel." ".$clausule." ".$column."= '".$variable."';";
        }
        $stmt = $connection->prepare($query);
        try {
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            $arrayResult = $row;                                    
        }
        catch(PDOException $e) {
            die($e->getMessage());
            $arrayResult = $e; 
        }     

        return $arrayResult;

    }
}