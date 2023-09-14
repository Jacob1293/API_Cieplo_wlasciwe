<?php

namespace form\inter;

interface EkoPumpFormInterface {

    public function setParametersBuilding($arrayFieldsForm): void;

    public function parametersParseJson(): array;
    
}

?>
