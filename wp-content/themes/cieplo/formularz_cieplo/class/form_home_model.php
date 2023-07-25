<?php

namespace form\class;

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
        /**** Materiał wewnętrznej warstwy izolacji w ścianie zewnętrznej */
        private string $internalWallIsolationMaterial;

        /**** Materiał wewnętrznej warstwy izolacji w ścianie zewnętrznej */
        private int $internalWallIsolationSize;

        /** Opcjonalnie: jeśli zewnętrzne ocieplenie */ 
        /*** Materiał zewnętrznego docieplenia ścian zewnętrznych */
        private string $externalWallIsolationMaterial;

        /*** Grubość zewnętrznego docieplenia ścian zewnętrznych */
        private string $externalWallIsolationSize;

        /** Liczba drzwi zewnętrznych w budynku */
        private int $numberDoors;

        /** Liczba drzwi balkonowych w budynku */
        private int $numberBalconyDoors;

        /** Liczba okien w budynku */
        private int $numberWindows;

        /** Liczba dużych przeszkleń w budynku */
        private int $numberHugeWindows;

        /** Rodzaj drzwi zewnętrznych */      
        private string $doorsType;


}





