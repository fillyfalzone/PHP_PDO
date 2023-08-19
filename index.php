<?php
    require_once "controllers/booksController.php";
    $bookController = new BooksController();

    if(empty($_GET['page'])){
        require_once "views/accueil.view.php";
    } else {
        switch($_GET['page']){
            case "accueil" : require_once "views/accueil.view.php";
            break;
            case "books" : $bookController->showBooks();
            break;
        }
    }
    
?>