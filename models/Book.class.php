<?php
    class Book {
        private int $_idBook;
        private  string $_title;
        private int $_nbPages;
        private string $_releaseDate;
        private string $_picture;
        private static $nextBook = 1; // static attribut to encrement books Id.

        

        //function construc of this class
        public function __construct(int $idBook, string $title, int $nbPages, string $releaseDate, string $picture){
            $this->_idBook = self::$nextBook;
            self::$nextBook++;
            $this->_title = $title;
            $this->_nbPages = $nbPages;
            $this->_releaseDate = $releaseDate;
            $this->_picture = $picture;
            
        }
        // Getters 
        public function getidBook(){return $this->_idBook;}
        public function getTitle(){return $this->_title;}
        public function getNbPages(){return $this->_nbPages;}
        public function getReleaseDate(){return $this->_releaseDate;}
        public function getPicture(){return $this->_picture;}
        //Setters "idBook dont need setter because it will be generate by incrementation"
        public function setTitle($title){$this->_title = $title;}
        public function setNbPages($nbPages){$this->_nbPages = $nbPages;}
        public function setReleaseDate($releaseDate){$this->_releaseDate = $releaseDate;}
        public function setPicture($picture){$this->_picture = $picture;}


    }


    
?>