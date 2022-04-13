<?php

require('actions/database.php');

// Récuperer les questions par defaut sans recherche
$getAllQuestions = $bdd->query('SELECT id, id_author, title, description, pseudo_author, date_publication FROM questions ORDER BY id DESC LIMIT 0,5');  // ordre décroissant , limite de 5 questions affichées 


// Vérifier si une recherche a été entrée par l'utilisateur
if(isset($_GET['search']) AND !empty($_GET['search'])){

    //stocker dans une variable la recherche de l'utilisateur
    $usersSearch = $_GET['search'];

    // cherche dans la bdd un résultat qui ressemble à ce que l'utilisateur cherche en fonction du titre
    $getAllQuestions = $bdd->query(' SELECT id, id_author, title, description, pseudo_author, date_publication FROM questions WHERE title LIKE "%' .$usersSearch. '%" ORDER BY id DESC');  





}



