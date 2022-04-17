<?php

require('actions/database.php');

// s'il y'a bien un id entré dans la barre
if(isset($_GET['id']) AND !empty($_GET['id'])){

    // l'id de l'user dans la barre de recherche est déclaré dans la variable idOFUser
    $idOfUser = $_GET['id'];

    // Requête afin de recuperer les datas de l'user 
    $checkIfUserExists = $bdd->prepare('SELECT pseudo, lastname, firstname FROM users WHERE id = ?');
    $checkIfUserExists->execute(array($idOfUser));

    // Si les datas ont bien été trouvées dans notre BDD
    if($checkIfUserExists->rowCount() > 0){

        // Les récuperer 
        $usersInfos = $checkIfUserExists->fetch();

        // Les déclarer dans des variables propres
        $user_pseudo = $usersInfos['pseudo'];
        $user_lastname = $usersInfos['lastname'];
        $user_firstname = $usersInfos['firstname'];

        // Récuperer les posts de l'user grâce à son id 
        $getHisQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id_author = ? ORDER BY id DESC');
        $getHisQuestionExists->execute(array($idOfUser));

    }else{
        $errorMsg = "Aucun utilisateur n'a été trouvé ! ";
    }

}else{
    $errorMsg = "Aucun utilisateur trouvé ! ";
}