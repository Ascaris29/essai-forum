<?php

require('actions/database.php');

// Validation du formulaire
if(isset($_POST['validate'])){

    // Vérifier si les champs sont remplis
    if (!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content'])){

        $new_question_title = htmlspecialchars($_POST['title']);
        $new_question_description = nl2br(htmlspecialchars($_POST['description']));
        $new_question_content = nl2br(htmlspecialchars($_POST['content']));

        // requete afin de modifier les datas dans la bdd
        $editQuestionOnWebsite = $bdd->prepare('UPDATE questions SET title = ?, description = ?, content = ? WHERE id = ?');
        $editQuestionOnWebsite->execute(array($new_question_title, $new_question_description, $new_question_content, $idOfQuestion));

        // Ensuite rediriger vers la page d'affichage des questions
        header('Location: my-questions.php');

    }else{
        $errorMsg = "Veuillez compléter tous les champs !";
    }

}