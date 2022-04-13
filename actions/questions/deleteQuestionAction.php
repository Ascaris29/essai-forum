<?php

//une session s'ouvre seulement si l'utilisateur est authentifié sinon il est redirigé(voir loginAction.php)
session_start();
if(!isset($_SESSION['auth'])){
    header('Location:../../login.php');
}
require('../database.php'); 




if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfTheQuestion = $_GET['id'];

    // Recuperer data de la question 
    $checkIfQuestionExists = $bdd->prepare('SELECT id_author FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    // si une question existe 
    if($checkIfQuestionExists->rowCount() > 0){

        //Récuperer question
        $questionsInfos = $checkIfQuestionExists->fetch();

        // si l'id de l'auteur est le même que l'id de la session 
        if($questionsInfos['id_author'] == $_SESSION['id']){

            // alors on peut supprimer la question
            $deleteThisQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
            $deleteThisQuestion->execute(array($idOfTheQuestion));

            // et retourner à la page des questions de l'auteur 
            header('Location:../../my-questions.php');


        }else{
           $errorMsg = "Vous n'avez pas le droit de supprimer une question qui ne vous appartient pas !"; 
        }

    }else{
        $errorMsg = "Aucune question n'a été trouvée !";
    }


}else{

    $errorMsg = " Aucune question n'a été trouvée !";

}

