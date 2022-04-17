<?php 


require('actions/database.php');

// Requête afin de récupérer les datas d'une question
$getAllMyQuestions = $bdd->prepare('SELECT id, title, description FROM questions WHERE id_author = ? ORDER BY id DESC');  // Affiche les id par ordre decroissant
$getAllMyQuestions->execute(array($_SESSION['id']));