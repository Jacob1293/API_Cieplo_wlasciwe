<?php

namespace form\class;

require('form_home_model.php');

use form\class\LocalFormHomeModel;

class FormHomePrepare extends LocalFormHomeModel {
    public $buildingType;
    public $constructionYear;
    public $constructionType;

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
            }
        }
    }

    public function parameters_parse_json(){
        ## zmienne lokalne funkcji
        $arrayFields = array();

        $arrayFields = array(
            'building_type'=>$this->buildingType,
            'construction_year'=>$this->constructionYear,
            'construction_type'=>$this->constructionType
        );

        return $arrayFields;
    }
}