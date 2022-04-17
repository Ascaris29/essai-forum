<?php

require('actions/database.php');

// si le bouton validate a bien été "cliqué"
if(isset($_POST['validate'])){

    // si le textarea n'est pa vide
    if(!empty($_POST['answer'])){

        // Récuperer reponses entrées
        $answer_user = nl2br(htmlspecialchars($_POST['answer']));
        $answer_heure = date('h:i');

        // Les insérer dans la bdd
        $insertAnswer = $bdd->prepare('INSERT INTO reponses(id_author, pseudo_author, id_question, content, date_answer)VALUES(?, ?, ?, ?, ?)');
        $insertAnswer->execute(array($_SESSION['id'], $_SESSION['pseudo'], $idOfTheQuestion, $answer_user, $answer_heure));

    }

}