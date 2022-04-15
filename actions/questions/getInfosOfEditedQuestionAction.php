<?php


require ('actions/database.php'); 

//vérifier si l'iD de la question est bien passé en paramètres dans l'url
if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfQuestion = $_GET['id'];

    // vérifier si la question existe 
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');            // recuperer la question de l'id qui est tapé dans la bdd
    $checkIfQuestionExists->execute(array($idOfQuestion));

    if($checkIfQuestionExists->rowCount() > 0){
        
        //  Récupérer les data de la question
        $questionInfos = $checkIfQuestionExists->fetch();
        if($questionInfos['id_author'] == $_SESSION['id']){
          
            $question_title = $questionInfos['title'];
            $question_description = $questionInfos['description'];
            $question_content = $questionInfos['content'];
            
           
            // Fonction afin d'effacer les balises <br > des zones de texte
            $question_description = str_replace ('<br />', '',$question_description);
            $question_content = str_replace ('<br />', '',$question_content);

        }else{
            $errorMsg = " Vous n'êtes pas l'auteur de cette question ! ";
        }

    }else{
        $errorMsg = "Aucune question n'a été trouvée";
    }

}else{
    $errorMsg = "Aucune question n'a été trouvée ! ";
}