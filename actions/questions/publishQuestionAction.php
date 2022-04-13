<?php 

require('actions/database.php');

//Valider le formulaire 
if(isset($_POST['validate'])){

    //Vérifier si les champs ne sont pas vides 
    if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content'])){

        //Récuperer les data question
        $question_title = htmlspecialchars($_POST['title']);
        $question_description = nl2br(htmlspecialchars($_POST['description'])); //nl2br autorise les sauts de ligne qui les transforment en <br>
        $question_content = nl2br(htmlspecialchars($_POST['content']));
        $question_date = date('d/m/Y');
        $question_heure = date('h:i');
        $question_id_author = $_SESSION['id'];
        $question_pseudo_author = $_SESSION['pseudo'];

        // Ajouter les data question à la bdd
        $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO questions(title, description, content, id_author, pseudo_author, date_publication, heure_publication)VALUES(?, ?, ?, ?, ?, ?, ?)');
        $insertQuestionOnWebsite->execute(array($question_title, $question_description, $question_content, $question_id_author, $question_pseudo_author, $question_date, $question_heure));

        //message de succès
        $successMsg = " Votre question a bien été publiée sur le site";

    }else {

        $errorMsg = "Veuillez completer tout les champs";
    }

}