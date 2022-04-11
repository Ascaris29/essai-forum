<?php

require ('actions/database.php'); 

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfQuestion = $_GET['id'];
    $checkIfQuestionExists = $bdd->prepare('SELECT id, id_author FROM questions WHERE id = ?');            // recuperer la question de l'id qui est tapé dans la bdd
    $checkIfQuestionExists->execute(array($idOfQuestion));

    if($checkIfQuestionExists->rowCount() > 0){
                                                                                                // si une question a bien été récupérée dans la bdd , alors 
        $questionInfos = $checkIfQuestionExists->fetch();

    }else{
        $errorMsg = "Aucune question n'a été trouvée";
    }

}else{
    $errorMsg = "Aucune question n'a été trouvée ! ";
}