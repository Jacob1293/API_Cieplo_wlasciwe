<?php 

namespace form ;

include_once('./class/form_home_prepare.php');

use form\class\FormHomePrepare;

## Zmienne
$arrayPostFields = array();

## Zapisywanie zmiennych do pól
$homePrepare = new FormHomePrepare();

/*
if(isset($_POST['building_type'])) {
    $buildingType = $homePrepare->setParametersBuilding($_POST['building_type']);
}

if(isset($_POST['construction_year'])) {
    $buildingType = $homePrepare->setParametersBuilding($_POST['construction_year']);
}
*/

## Tablica ze zmiennymi przesłanymi z formularza
if(isset($_POST)) {
    foreach($_POST as $keyPost => $valPost) {
        $arrayPostFields += array($keyPost => $valPost);
    }
}

## Przesłanie tablicy ze zmiennymi do klasy FormHomePrepare

$homePrepare->setParametersBuilding($arrayPostFields);

print_r($homePrepare->parameters_parse_json()); 


        
    


            
  
         
                     



?>

