<?php 
    ob_start() // open buffer
?>   


Ici la page d'accueil



   



<?php
$content = ob_get_clean(); // put the buffer contain in this variable. 
$title = "Bibliothèque MGA";
require_once "template.php";
?>