<?php

namespace form\class\form;

class LocalFormHomeModel {

        /* Start */

        /** Rodzaj budynku */
        private string $buildingType;

        /* Lokalizacja */

        /** Rok budynku */
        private int $constructionYear;

        /** Współrzędne: szerokość */
        private float $latitude;
        
        /** Współrzędne: długość */
        private float $longitude;

        /* Wymary budynku */

        /** Kształt obrysu ścian zewnętrznych budynku */
        private string $buildingShape;

        /** Jakie wymiary zostana podane */
        private bool $typAreaSize;

        /*** Jeśli buildingShape == 'regular' */
        /**** Długość obrysu budynku (M) */
        private float $buildingLength;

        /**** Szerokość obrysu budynku (M) */
        private float $buildingWidth;

        /*** LUB */

        /**** Powierzchnia zabudowy (M2) */
        private float $floorArea; 

        /*** Jeśli buildingShape == 'irregular' */
        /**** Obwód budynku (M) oraz floorArea -> Powierzchnia zabudowy (M2) */
        private float $floorPerimeter;

        /** Liczba pełnych kondygnacji (bez piwnicy i poddasza) */
        private int $buildingFloors;

        /** Liczba ogrzewanych kondygnacji (wraz z piwnicą i poddaszem) */
        private array $buildingHeatedFloors;

        /** Przybliżona wysokość pięter */
        private float $floorHeight;

        /** Rodzaj dachu */
        private string $buildingRoof;

        /** Czy budyenk posiada piwnicę */
        private bool $hasBasement;

        /** Czy budynek posiada balkon(y) */
        private bool $hasBalcony;

        /** Charakterystyka garażu w bryle budynku */
        private string $garageType;

        /** Czy dom w zabudowie szeregowej jest na rogu */
        private bool $onCorner;

        /* Ściany */

        /** Rodzaj konstrukcji budynku */        
        private string $constructionType;

        /*** Całkowita grubość ściany zewnętrznej */
        private int $wallSize;

        /*** Jeśli constructionType == 'traditional'  */
        /**** Podstawowy materiał konstrukcji ścian */
        private string $primaryWallMaterial;

        /**** Opcjonalnie: dodatkowy materiał konstrukcji gdy mix np. pustaków i cegieł */
        private string $secondaryWallMaterial;

        /*** Jeśli constructionType == 'canadian' */
        private bool $hasInternalWallIsolatio;

        /**** Materiał wewnętrznej warstwy izolacji w ścianie zewnętrznej */
        private string $internalWallIsolationMaterial;

        /**** Grubość wewnętrznej warstwy izolacji w ścianie zewnętrznej */
        private int $internalWallIsolationSize;

        /*** Jeśli constructionType == 'canadian' */
        private bool $hasExternalWallIsolation;


        /*** Materiał zewnętrznego docieplenia ścian zewnętrznych */
        private string $externalWallIsolationMaterial;

        /*** Grubość zewnętrznego docieplenia ścian zewnętrznych */
        private string $externalWallIsolationSize;

        /** Rodzaj drzwi zewnętrznych */      
        private string $doorsType;

        /** Liczba drzwi zewnętrznych w budynku */
        private int $numberDoors;

        /** Rodzaj okien */
        private string $windowsType;

        /** Liczba okien w budynku */
        private int $numberWindows;

        /** Liczba dużych przeszkleń w budynku */
        private int $numberHugeWindows;

        /** Liczba drzwi balkonowych w budynku */
        private int $numberBalconyDoors;

        /* Poddasze i parter */

        /** Opcjonalnie jeśli daliśmy że dach jest nieogrzewany */
        /*** Jak wygląda sytuacja na nieogrewanym poddaszu */
        private string $topSituation;

        /** Czy jest izolacja dachu */
        private bool $hasTopIsolation;

        /** Materiał docieplenia przestrzeni ogrzewanej od góry */
        private string $topIsolationMaterial;

        /** Grubość docieplenia */
        private int $topIsolationSize;

        /** Czy jest izolacja piwnicy */
        private bool $hasbottomIsolation;

        /** Materiał docieplenia przestrzeni ogrzewanej oddołu */
        private bool $bottomIsolationMaterial;

        /** Grubość docieplenia */
        private bool $bottomIsolationSize;

        /** Jeśli wybrano typ budynku mieszkanie */
        /*** Co znajduje się powyżej mieszkania */
        private string $whatsOver;

        /*** Co znajduje się poniżej mieszkania */
        private string $whatsUnder; 

        /*** Co znajduje się w sąsiedztwie mieszkania ściana północna */
        private string $whatsNorth; 

        /*** Co znajduje się w sąsiedztwie mieszkania ściana wschodnia */
        private string $whatsEast;

        /*** Co znajduje się w sąsiedztwie mieszkania ściana południowa */
        private string $whatsSouth;
        
        /*** Co znajduje się w sąsiedztwie mieszkania ściana zachodnia */
        private string $whatsWest;

        /* Ogrzewanie */

        /** Główne źródło ciepła */
        private string $mainHeatingDevice;

        /** Średnia dobowa temperatura w pomieszczeniach ogrzewanych zimą. */
        private float $indoorTemperature;

        /** Rodzaj wentylacji */
        private string $ventilationType;

        /** Czy wyliczamy dodatkową moc na potrzeby podgrzewania ciepłej wody użytkowej */
        private bool $hasIncludeHotWater;

        /*** Liczba osób korzystających z ciepłej wody użytkowej */
        private int $hotWaterPersons;

        /*** Intensywność wykorzystania ciepłej wody użytkowej  */
        private string $hotWaterUsage;

}





