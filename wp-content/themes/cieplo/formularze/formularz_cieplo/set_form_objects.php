<?php 

namespace form\formCieplo;

include_once('./class/form/form_home_prepare.php');
include_once('./class/API/get_summary_from_api.php');
include_once('./class/DB/inserting.php');

use form\formCieplo\class\form\FormHomePrepare;
use form\formCieplo\class\API\GetSummaryApi;
use form\formCieplo\class\DB\InsertDataToDB;

## Zmienne
$arrayPostFields = array();

## Zapisywanie zmiennych do pól
$homePrepare = new FormHomePrepare();
$getSummaryApi = new GetSummaryApi();
$insertDataToDb = new InsertDataToDB();
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

$homePreparedParameters = $homePrepare->parametersParseJson();
$json = json_encode($homePreparedParameters);

echo '<div> <p>Wysłane dane to<p></br>'.$json.' </div>';



$insertDataFromApi = $insertDataToDb->insertSummaryFromApi();

echo "Czy połączono do DB:";

print_r($insertDataFromApi);


/*  
## Pobranie danych z API
$arrayGetSummaryApi = $getSummaryApi->getSummaryApi($json);

echo '<div> <p>Zwrócony wynik to : <p></br>';
print_r($arrayGetSummaryApi);
echo' </div>';
*/

                    

?>

