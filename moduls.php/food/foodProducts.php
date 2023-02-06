<?php 
    class foodProducts extends headProducts {
        public $weight;
        public $ingredients;

        public function __construct($_image, $_title, $_category, $_prize, $_weight, ingredients $_ingredients) {
            parent::__construct($_image, $_title, $_category, $_prize);
            $this->weight = $_weight;
            $this->ingredients = $_ingredients;
        }

        public function getIngredients() {
            return implode(', ', $this->ingredients->items);
        }
    };

    class ingredients
    {
        public $items;

        public function __construct($_items) {
            $this->items = $_items;
        }
    }
    
?>