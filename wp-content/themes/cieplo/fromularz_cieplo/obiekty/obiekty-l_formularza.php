<?php

namespace form\objects;

class form_model {
        /**
         * @var string
         */
        private $building_type;

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

}





