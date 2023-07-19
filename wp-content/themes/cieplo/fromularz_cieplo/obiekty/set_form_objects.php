<?php 

namespace form\objects ;

include_once('obiekty-l_formularza.php');

use form\objects\form_model;
    
      
$testy = new form_model();
          
if(isset($_POST['building_type'])) {
   echo "Dodano do modelu budynek: ".$_POST['building_type'];
    $testy->set_building_type($_POST['building_type']);                    
}
            
if(isset($_POST['construction_year'])) {
    echo "Dodano do modelu rok budowy: ".$_POST['construction_year'];
 }
                     


?>

