<?php
    class gameProducts extends headProducts
    {
        public $characteristic;
        public $size;

        public function __construct($_image, $_title, $_category, $_prize, $_characteristic, $_size) {
            parent::__construct($_image, $_title, $_category, $_prize);
            $this->characteristic = $_characteristic;
            $this->size = $_size;
        }
    }
?>