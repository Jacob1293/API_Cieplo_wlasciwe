<?php

namespace form\formCieplo\class\DB;

require_once('connect_to_db.php');

use PDO;
use PDOException;

class InsertDataToDB {

    function insertSummaryFromApi() {
        $arrayResult = array();
        $connection = OpenCon();
        $query = "SELECT id FROM wp_posts ";
        $stmt = $connection->prepare($query);
        try {
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $i = 0;
            foreach($row as $val) {                
                $arrayResult += array($i => $val['id']);
                $i++;
            }                                                
   
        }
        catch(PDOException $e) {
            die($e->getMessage());
            $arrayResult = $e; 
        }     

        return $arrayResult;

    }
}