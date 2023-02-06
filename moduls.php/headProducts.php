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
    }
?>