<?php

namespace form\objects;

class local_form_model {
        /**
         * @var string
         */
        private $building_type;

        /**
         * @var string
         */
        private $construction_year;

        /**
         * @return string
         */
        public function get_building_type(): string {
                return $this->building_type;
        }

        /**
         * @param string $building_type
         */
        public function set_building_type( string $building_type ) {
                $this->building_type = $building_type;
        }
        /**
         * @return string
         */
        public function get_construction_year(): string {
                return $this->construction_year;
        }

        /**
         * @param string $building_type
         */
        public function set_construction_year( string $construction_year ) {
                $this->construction_year = $construction_year;
        }

}





