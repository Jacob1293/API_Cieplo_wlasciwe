<?php 

namespace form\objects ;

include_once('obiekty-l_formularza.php');

use form\objects\local_form_model;

## Zmienne
$obiectsJSON = array();

## Zapisywanie zmiennych do pól
$domObiekty = new local_form_model();

if(isset($_POST)) {
    foreach($_POST as $keyPost => $valPost) {
        //echo "Dodano do modelu : ". $setFunction." zmienna ".$valPost;
        $obiectsJSON += array($keyPost=>$valPost); 
    }
                    
}
                


$convertObiectsToJSON = json_encode($obiectsJSON);
print_r($convertObiectsToJSON) 


        
    


            
  
         
                     



?>

