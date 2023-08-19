<?php
    require_once "Model.class.php";
    require_once "Book.class.php";

    class BookManager extends Model{
        private $_books;
        // function to add a book in bookManager array
        public function addBook($book){
            $this->_books[] = $book;
        }
        // function to get books list  
        public function getBooks(){
            return $this->_books;
        }

        public function loadBooks(){
            $sql = $this->getBdd()->prepare("SELECT * FROM book;");
            $sql->execute();
            $books = $sql->fetchAll(PDO::FETCH_ASSOC); //FETCH_ASSOC avoids having duplicates in the $books array .
            //$sql->closeCursor(); // to close sql request 

            foreach($books as $book){
                $l = new Book($book['idBook'],$book['title'],$book['nbPages'],$book['releaseDate'],$book['picture']);
                $this->addBook($l);
            }
            return $this->getBooks();
        }
    }
?>