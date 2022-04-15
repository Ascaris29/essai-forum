<?php

require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['answer'])){

        $answer_user = nl2br(htmlspecialchars($_POST['answer']));
        $answer_heure = date('h:i');

        $insertAnswer = $bdd->prepare('INSERT INTO reponses(id_author, pseudo_author, id_question, content, date_answer)VALUES(?, ?, ?, ?, ?)');
        $insertAnswer->execute(array($_SESSION['id'], $_SESSION['pseudo'], $idOfTheQuestion, $answer_user, $answer_heure));

    }

}