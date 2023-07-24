<?php
    $arrayDistinctCityValue = array();

        $path = preg_replace( '/wp-content(?!.*wp-content).*/', '', __DIR__ );
        require_once( $path . 'wp-load.php' );
        if(isset($_POST['city'])){
            $cityName = $_POST['city'];
        }
        $url = 'https://nominatim.openstreetmap.org/?city='.$cityName.'&format=json';
        $response = wp_remote_get($url, array(
            'headers'     => array('Content-Type' => 'application/json; charset=utf-8'),
            'method'      => 'GET'
        ));
        if ( is_wp_error( $response ) ) {
            //$productsInfo = "Koniec stron";
            $erro =  $response;
        } else {
            $responseBody = wp_remote_retrieve_body($response);
        }
        
        $decoded = json_decode($responseBody, true);

        foreach($decoded as $arrayCity) {
            foreach($arrayCity as $keyCity => $valCity   ) {
                if($keyCity === 'display_name') {
                    $cityNameSearched = $valCity;                    
                }      
                if($keyCity === 'lat') {
                    $latitudeCity = $valCity;                    
                }   
                if($keyCity === 'lon') {
                    $longitudeCity = $valCity;                    
                }     

            }
            echo '<input type="radio" id="city_'.$cityNameSearched.'" name="city_localization" value="'.$latitudeCity.','.$longitudeCity.'"><label for="city_'.$cityNameSearched.'">'.$cityNameSearched.'</label></br>';
        }
                
 

?>  