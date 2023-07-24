<?php

namespace form\class;

require('form_home_model.php');

use form\class\LocalFormHomeModel;

class FormHomePrepare extends LocalFormHomeModel {
    public $buildingType;
    public $constructionYear;
    public $constructionType;
    public $localizationCity;
    public $latitude;
    public $longitude;

    public function setParametersBuilding($arrayFieldsForm ) {
        foreach($arrayFieldsForm as $keyField => $valField) {
            switch($keyField) {
                case 'building_type':
                    $this->buildingType = $valField;
                    break;
                case 'construction_year':
                    $this->constructionYear = $valField;
                    break;
                case 'construction_type':
                    $this->constructionType = $valField;
                    break; 
                case 'city_localization':
                    $this->localizationCity = $valField;
            }
        }
    }

    public function parameters_parse_json(){
        ## zmienne lokalne funkcji
        $arrayFields = array();

        ## rozdzielenie parametrów lokalizacji miasta
        $arr = explode(",", $this->localizationCity, 2);
        $this->latitude = $arr[0];        
        $this->longitude = $arr[1];        

        $arrayFields = array(
            'building_type'=>$this->buildingType,
            'construction_year'=>$this->constructionYear,
            'latitude'=>  $this->latitude,
            'longitude'=> $this->longitude,
            'construction_type'=>$this->constructionType
        );

        return $arrayFields;
    }
}