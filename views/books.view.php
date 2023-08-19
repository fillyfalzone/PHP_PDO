<?php 
    

    ob_start() // open buffer?>

    <table class="table text-center">
        <tr class="table-dark">
            <th>Picture</th>
            <th>Titre</th>
            <th>Nombre de pages</th>
            <th>Date de sortie</th>
            <th colspan="2">Actions</th>
        </tr>
        <?php 
        
        // run books array to show each book informations
        foreach($books as $book){ ?>
        <tr>
            <td class="align-middle"><img src="public/imgs/<?= $book->getPicture() ?>" alt="book algo" class="sizeBooks"></td>
            <td class="align-middle"><?= $book->getTitle() ?></td>
            <td class="align-middle"><?= $book->getNbPages() ?></td>
            <td class="align-middle"><?= $book->getReleaseDate() ?></td>
            <td class="align-middle"><a href="#" class="btn btn-warning">Modifier</a></td>
            <td class="align-middle"><a href="#" class="btn btn-danger">Supprimer</a></td>
        </tr>
        <?php } ?>
    </table>
    <a href="#" class="btn btn-success d-block">Ajouter</a>


    <?php
    $content = ob_get_clean(); // put the contain of buffer in this variable. 
    $title = "Les Livres de la bibliothèque";
    require_once "template.php";
?>