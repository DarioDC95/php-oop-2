<?php 
    class accessory extends headProducts
    {
        public $material;
        public $size;

        public function __construct($_image, $_title, $_category, $_prize, $_material, $_size) {
            parent::__construct($_image, $_title, $_category, $_prize);
            $this->material = $_material;
            $this->size = $_size;
        }
    }
?>