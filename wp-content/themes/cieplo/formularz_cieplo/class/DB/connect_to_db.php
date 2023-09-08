<?php

function OpenCon() {
    
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "cieplo";
    

    /*
    ## serwer    
    $dbhost = "94.152.58.89";
    $dbuser = "admin23200_mtlsklep";
    $dbpass = "8Wp83-cvQn";
    $dbname = "baza23200_mtlsklep";
    */
    try {
        $connect = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8mb4","$dbuser", "$dbpass");
            
        return $connect;
    } catch(PDOException $e) {
        echo "Nie udało się nawiązać połączenia: " . $e->getMessage();
    }
}

   
?>