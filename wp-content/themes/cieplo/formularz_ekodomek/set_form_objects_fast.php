<?php 

namespace form ;

include_once('./class/fast_form_home_prepare.php');

use form\class\FastFormHomePrepare;

## Zmienne
$arrayPostFields = array();

## Zapisywanie zmiennych do pól
$homePrepare = new FastFormHomePrepare();

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


## Wysłanie zmiennych do funkcji