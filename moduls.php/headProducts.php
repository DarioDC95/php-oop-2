<?php 
    class headProducts
    {
        public $image;
        public $title;
        public $category;
        public $prize;

        public function __construct($_image, $_title, $_category, $_prize) {
            $this->image = $_image;
            $this->title = $_title;
            $this->category = $_category;
            $this->prize = $_prize;
        }

        public function getCategoryIcon(){
            switch (strtolower($this->category)) {
                case 'cane':
                    return '<i class="fa-solid fa-dog"></i>';
                    break;
                
                case 'gatto':
                    return '<i class="fa-solid fa-cat"></i>';
                    break;

                case 'pesce':
                    return '<i class="fa-solid fa-fish"></i>';
                    break;
                
                default:
                    return '<i class="fa-solid fa-dove"></i>';
                    break;
            }
        }
    }
?>