<?php
    require_once "models/BookManager.class.php";

    class BooksController{
        private $_bookManager;

        public function __construct(){
            // instance of books manager
        $this->_bookManager = new BookManager();
        $this->_bookManager->loadBooks(); // Load all books of database
        }

        public function showBooks(){
            $books = $this->_bookManager->getBooks(); //get books to use they in the books view.
            require "views/books.view.php";
        }
    }
?>