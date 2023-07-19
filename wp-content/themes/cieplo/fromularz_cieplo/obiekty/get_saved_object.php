<?php

namespace form\objects ;

include_once('obiekty-l_formularza.php');

use form\objects\form_model;
    
      
$testy = new form_model();
          
if(isset($_GET)) {
   echo "Pobieranie budenk";
    $val = $testy->get_building_type();                    
    echo $val;
}