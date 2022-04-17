<?php

require('actions/database.php');

//requete pour recuperer les data d'une reponses qui possède l'id de la question dans la barre de recherche
$getAllAnswersOfThisQuestion = $bdd->prepare('SELECT id_author, pseudo_author, id_question, content, date_answer FROM reponses WHERE id_question = ? ORDER BY id DESC');
$getAllAnswersOfThisQuestion->execute(array($idOfTheQuestion));



    