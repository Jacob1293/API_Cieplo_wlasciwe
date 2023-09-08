<?php

namespace form\class;

class FastFormHomePrepare {

    public $heatingArea;
    public $localizationCity;
    public $typeWall;
    public $fatWall;
    public $fatIsolation;
    public $typeWindows;
    public $mainHeatingDevice;
    public $powerBoiler;
    public $powerBoilerMore;
    public $fuelConsumptionOther;
    public $fuelConsumptionOtherMore;
    public $fuelConsumptionGas;
    public $fuelConsumptionGasMore;
    public $fuelConsumptionWood;
    public $fuelConsumptionWoodMore;
    public $fuelConsumptionElectric;
    public $fuelConsumptionElectricMore;
    public $heatingType;
    public $temperatureHeating;
    public $waterUsePerson;




    public function setParametersBuilding($arrayFieldsForm ) {
        foreach($arrayFieldsForm as $keyField => $valField) {
            switch($keyField) {
                case 'heating_area':
                    $this->heatingArea = $valField;
                    break;   
                case 'city_localization':
                    $this->localizationCity = $valField;
                    break;
                case 'type_wall':
                    $this->typeWall = $valField;
                    break;
                case 'fat_wall':
                    $this->fatWall = $valField;
                    break;
                case 'fat_isolation':
                    $this->fatIsolation = $valField;
                    break;
                 case 'type_windows':
                    $this->typeWindows = $valField;
                    break;
                case 'main_heating_device':
                    $this->mainHeatingDevice = $valField;
                    break;
                case 'power_boiler':
                    $this->powerBoiler = $valField;
                    break;
                case 'power_boiler_more':
                    $this->powerBoilerMore = $valField;
                    break;         
                case 'fuel_consumption_other':
                    $this->fuelConsumptionOther = $valField;
                    break; 
                case 'power_boiler_more':
                    $this->powerBoilerMore = $valField;
                    break; 
                case 'fuel_consumption_other_more':
                    $this->fuelConsumptionOtherMore = $valField;
                    break;      
                case 'fuel_consumption_gas':
                    $this->fuelConsumptionGas = $valField;
                    break;   
                case 'fuel_consumption_gas_more':
                    $this->fuelConsumptionGasMore = $valField;
                    break;   
                case 'fuel_consumption_wood':
                    $this->fuelConsumptionWood = $valField;
                    break;         
                case 'fuel_consumption_wood_more':
                    $this->fuelConsumptionWoodMore = $valField;
                    break;  
                case 'fuel_consumption_electric':
                    $this->fuelConsumptionElectric = $valField;
                    break;  
                case 'fuel_consumption_electric_more':
                    $this->fuelConsumptionElectricMore = $valField;
                    break;  
                case 'heating_type':
                    $this->heatingType = $valField;
                    break; 
                case 'temperature_heating':
                    $this->temperatureHeating = $valField;
                    break; 
                case 'water_use_person':
                    $this->waterUsePerson = $valField;
                    break;                 
            }
        }
    }
}