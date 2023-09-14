<?php

namespace form\formCieplo\class\form;

$dir = dirname(dirname($_SERVER['SCRIPT_FILENAME']));

require_once($dir.'/inter/inter_Form.php');

use form\inter\EkoPumpFormInterface;

class FormHomePrepare implements EkoPumpFormInterface {
    public $buildingType;
    public $constructionYear;
    public $localizationCity;
    public $latitude;
    public $longitude;
    public $buildingShape;
    public $typAreaSize;
    public $buildingFloors;
    public $buildingFloorsApartment;
    public $buildingFloorsOthers;
    public $buildingHeatedFloors;
    public $buildingHeatedFloorsApartment;
    public $buildingHeatedFloorsOthers;
    public $floorArea;
    public $floorPerimeter;
    public $buildingLength;
    public $buildingWidth;
    public $buildingRoof;
    public $hasBasement;
    public $floorHeight;
    public $hasBalcony;
    public $garageType;
    public $onCorner;
    // ściany
    public $constructionType;
    public $wallSize;
    public $primaryWallMaterial;
    public $secondaryWallMaterial;
    public $hasInternalWallIsolation;
    public $internalWallIsolationMaterial;
    public $internalWallIsolationSize;
    public $hasExternalWallIsolation;
    public $externalWallIsolationMaterial;
    public $externalWallIsolationSize;
    public $windowsType;
    public $numberWindows;
    public $numberBalconyDoors;
    public $numberHugeWindows;
    public $doorsType;
    public $numberDoors;
    // Ocieplenie
    public $topSituation;
    public $hasTopIsolation;
    public $topIsolationMaterial;
    public $topIsolationSize;
    public $hasbottomIsolation;
    public $bottomIsolationMaterial;
    public $bottomIsolationSize;
    public $whatsOver;
    public $whatsUnder; 
    public $whatsNorth; 
    public $whatsEast;
    public $whatsSouth;
    public $whatsWest;
    // Ogrzewanie
    public $mainHeatingDevice;
    public $indoorTemperature;
    public $ventilationType;
    public $hasIncludeHotWater;
    public $hotWaterPersons;
    public $hotWaterUsage;



    public function setParametersBuilding($arrayFieldsForm ): void {
        foreach($arrayFieldsForm as $keyField => $valField) {
            switch($keyField) {
                case 'building_type':
                    $this->buildingType = $valField;
                    break;
                case 'construction_year':
                    $this->constructionYear = $valField;
                    break;
                case 'city_localization':
                    $this->localizationCity = $valField;
                    break;
                case 'building_shape':
                    $this->buildingShape = $valField;
                    break;
                case 'building_area_size_option':
                    $this->typAreaSize = $valField;
                    break;                    
                case 'building_floors_apartment':
                    $this->buildingFloorsApartment = $valField;
                    break;
                case 'building_floors':
                    $this->buildingFloorsOthers = $valField;
                    break;
                case 'building_roof':
                    $this->buildingRoof = $valField;
                    break;                        
                case 'building_heated_floors_apartment':                   
                    $this->buildingHeatedFloorsApartment = $valField;
                    break;                
                case 'building_heated_floors':                   
                    $this->buildingHeatedFloorsOthers = $valField;
                    break;
                case 'floor_area':                   
                    $this->floorArea = $valField;
                    break;
                case 'perimeter':                   
                    $this->floorPerimeter = $valField;
                    break;
                case 'building_length':                   
                    $this->buildingLength = $valField;
                    break;     
                case 'building_width':                   
                    $this->buildingWidth = $valField;
                    break;        
                case 'has_basement':                   
                    $this->hasBasement = $valField;
                    break;   
                case 'floor_height':                   
                    $this->floorHeight = $valField;
                    break;   
                case 'has_balcony':                   
                    $this->hasBalcony = $valField;
                    break;  
                case 'garage_type':                   
                    $this->garageType = $valField;
                    break; 
                case 'on_corner':                   
                    $this->onCorner = $valField;
                    break; 
                case 'construction_type':
                    $this->constructionType = $valField;
                    break; 
                case 'wall_size':
                    $this->wallSize = $valField;
                    break; 
                case 'primary_wall_material':
                    $this->primaryWallMaterial = $valField;
                    break; 
                case 'secondary_wall_material':
                    $this->secondaryWallMaterial = $valField;
                    break; 
                case 'has_internal_wall_isolation':
                    $this->hasInternalWallIsolation = $valField;
                    break; 
                case 'internal_wall_isolation_material':
                   $this->internalWallIsolationMaterial = $valField;
                    break; 
                case 'internal_wall_isolation_size':
                   $this->internalWallIsolationSize = $valField;
                    break;                                                   
                case 'has_external_wall_isolation':
                    $this->hasExternalWallIsolation = $valField;
                    break; 
                case 'external_wall_isolation_material':
                    $this->externalWallIsolationMaterial = $valField;
                    break; 
                case 'external_wall_isolation_size':
                    $this->externalWallIsolationSize = $valField;
                    break; 
                case 'windows_type':
                    $this->windowsType = $valField;
                    break; 
                case 'number_windows':
                    $this->numberWindows = $valField;
                    break; 
                case 'number_balcony_doors':
                    $this->numberBalconyDoors = $valField;
                    break; 
                case 'number_huge_glazings':
                    $this->numberHugeWindows = $valField;
                    break; 
                case 'doors_type':
                    $this->doorsType = $valField;
                    break; 
                case 'number_doors':
                    $this->numberDoors = $valField;
                    break;     
                case 'unheated_space_over_type':
                    $this->topSituation = $valField;
                    break; 
                case 'top_isolation':
                    $this->hasTopIsolation = $valField;
                    break; 
                case 'top_isolation_material':
                    $this->topIsolationMaterial = $valField;
                    break; 
                case 'top_isolation_size':
                    $this->topIsolationSize = $valField;
                    break;    
                case 'bottom_isolation':
                    $this->hasbottomIsolation = $valField;
                    break;
                case 'bottom_isolation_material':
                    $this->bottomIsolationMaterial = $valField;
                    break;
                case 'bottom_isolation_size':
                    $this->bottomIsolationSize = $valField;
                    break;   
                case 'whats_over':
                    $this->whatsOver = $valField;
                    break;                       
                case 'whats_under':
                    $this->whatsUnder = $valField;
                    break;   
                case 'whats_north':
                    $this->whatsNorth = $valField;
                    break;
                case 'whats_south':
                    $this->whatsSouth = $valField;
                    break;   
                case 'whats_east':
                    $this->whatsEast = $valField;
                    break;
                case 'whats_west':
                    $this->whatsWest = $valField;
                    break;
                case 'main_heating_device':
                    $this->mainHeatingDevice = $valField;
                    break;
                case 'indoor_temperature':
                    $this->indoorTemperature = $valField;
                    break;
                 case 'ventilation_type':
                    $this->ventilationType = $valField;
                    break;
                case 'has_include_hot_water':
                    $this->hasIncludeHotWater = $valField;
                    break;
                case 'hot_water_persons':
                    $this->hotWaterPersons = $valField;
                    break;
                case 'hot_water_use':
                    $this->hotWaterUsage = $valField;
                    break;                    
            }
        }
    }

    public function parametersParseJson(): array{
        ## zmienne lokalne funkcji
        $arrayFields = array();

        ## rozdzielenie parametrów lokalizacji miasta
        $arr = explode(",", $this->localizationCity, 2);
        $this->latitude = $arr[0];        
        $this->longitude = $arr[1];   

        ### Budynek, lokalizacja i wymiary
        ## Dodanie pierwszych danych do tablicy json
        $arrayFields = array(
            'building_type'=>$this->buildingType,
            'construction_year'=>$this->constructionYear,
            'latitude'=>  $this->latitude,
            'longitude'=> $this->longitude,
            'construction_type'=>$this->constructionType,
            'building_shape'=> $this->buildingShape,
        );
        
        ## wymiary budynku w zależności od wybranego typu obrysu oraz wymiarów
        if($this->buildingType != 'apartment' && $this->buildingShape === 'regular' && $this->typAreaSize === 'size_wall') {
            $arrayFields += array(                                           
                'building_length'=> $this->buildingLength,
                'building_width'=> $this->buildingWidth
            );
        } elseif(($this->buildingShape === 'regular' && $this->typAreaSize === 'size_area') || $this->buildingType === 'apartment') {
            $arrayFields += array(                                           
                'floor_area'=> $this->floorArea,
            );
        }  elseif($this->buildingShape === 'irregular') {
            $arrayFields += array(                                           
                'floor_area'=> $this->floorArea,
                'floor_perimeter'=> $this->floorPerimeter,
            );
        }

        ## Liczba pięter w zależności od typu budynky 
        if($this->buildingType === 'apartment') {
            $this->buildingFloors = $this->buildingFloorsApartment; 
            $this->buildingHeatedFloors = $this->buildingHeatedFloorsApartment;
        }else {
            $this->buildingFloors = $this->buildingFloorsOthers;            
            $this->buildingHeatedFloors = $this->buildingHeatedFloorsOthers;
        }        

        ## Czy zaznaczono wartość piwnicy
        if(!$this->hasBasement) {
            $this->hasBasement = 'false';
        }

        ## Czy zaznaczono wartość balkon
        if(!$this->hasBalcony) {
            $this->hasBalcony = 'false';
        }

        ## Dodanie kolejnych pozycji do tablicy json
        if($this->buildingRoof) {
            null;
        } else {
            $this->buildingRoof = 'flat';
        }

        $arrayFields += array(              
            'building_floors'=> $this->buildingFloors,
            'building_heated_floors'=> $this->buildingHeatedFloors,
            'floor_height'=> $this->floorHeight, 
            'building_roof'=> $this->buildingRoof, 
        );

        ## Dodanie kolejnych pozycji do tablicy json
        if($this->buildingType != 'apartment') {
            $arrayFields += array(                                                                  
                'has_basement'=> $this->hasBasement,
                'has_balcony'=> $this->hasBalcony,
                'garage_type'=> $this->garageType,
            );
        }

        ## Dla zabudowy szeregowej znacznik czy jest narozny
        if($this->buildingType === 'row_house'){
            $arrayFields += array(                                   
                'on_corner'=> $this->onCorner,
            );
        }
        
        ### Ściany
        ## Dodanie kolejnych pozycji do tablicy json
        $arrayFields += array(                                   
            'construction_type'=> $this->constructionType,
            'wall_size'=> $this->wallSize,            
        );

        ## Materiał podstawowy w konstrukcji tradycyjnej 
        if($this->constructionType === 'traditional') {
            $arrayFields += array(  
                'primary_wall_material'=> $this->primaryWallMaterial, 
                'secondary_wall_material'=> $this->secondaryWallMaterial,                 
            );
        }

        ## Czy ściana ma izolację w środku
        if(($this->constructionType === 'canadian' ||  $this->constructionType === 'traditional')&& $this->hasInternalWallIsolation == 1) {
            $arrayFields += array(  
                'internal_wall_isolation'=> array('material'=>$this->internalWallIsolationMaterial, 'size'=>$this->internalWallIsolationSize),               
            );
        }

        ## Czy dom jest docieplony
        if(($this->constructionType === 'canadian' ||  $this->constructionType === 'traditional') && $this->hasExternalWallIsolation == 1) {
            $arrayFields += array(  
                'external_wall_isolation'=> array('material'=>$this->internalWallIsolationMaterial, 'size'=>$this->internalWallIsolationSize),               
            );
        }

        ## Dodanie kolejnych pozycji do tablicy json
        $arrayFields += array(                                   
            'windows_type'=> $this->windowsType,
            'number_windows'=> $this->numberWindows,
            'number_balcony_doors'=> $this->numberBalconyDoors,
            'number_huge_windows'=> $this->numberHugeWindows,
            'doors_type'=> $this->doorsType,
            'number_doors'=>$this->numberDoors,
        );

        ### Ocieplenie

        ## Jeśli typ budynku = apartment 
        if($this->buildingType === 'apartment') {
            $arrayFields += array(                                   
                'whats_over'=> $this->whatsOver,
                'whats_under'=> $this->whatsUnder,
                'whats_north'=> $this->whatsNorth,
                'whats_south'=> $this->whatsSouth,
                'whats_east'=> $this->whatsEast,
                'whats_west'=> $this->whatsWest,
            );            
        } else {

            ## Jeśli poddasze nieogrzewane
            if(in_array('0',$this->buildingHeatedFloors)) {
                null;
            } else {
                $arrayFields += array(                                   
                    'unheated_space_over_type'=> $this->topSituation,                
                );
            }

            ## Jeśli jest izolacja dachu
            if($this->hasTopIsolation == 'true') {
                $arrayFields += array(  
                    'top_isolation'=> array('material'=>$this->topIsolationMaterial, 'size'=>$this->topIsolationSize),               
                );
            }

            ## Jeśli jest izolacja podłogi parteru
            if($this->hasbottomIsolation == 'true') {
                $arrayFields += array(  
                    'bottom_isolation'=> array('material'=>$this->bottomIsolationMaterial, 'size'=>$this->bottomIsolationSize),               
                );
            }
        }

        ### Ogrzewanie budynku
        $arrayFields += array(                                   
            'main_heating_device'=> $this->mainHeatingDevice,
            'indoor_temperature' => $this->indoorTemperature,          
            'ventilation_type' => $this->ventilationType,
        );

        if($this->hasIncludeHotWater === 'true') {
            $arrayFields += array(                                   
                'hot_water_persons'=> $this->hotWaterPersons,
                'hot_water_use' => $this->hotWaterUsage,          
            );
        }

        return $arrayFields;
    }
}