<?php

require('actions/database.php');

if(isset($_POST['validate'])){

    //Vérifier si l'user a bien complété tous les champs
    if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){
        
        //Les données de l'user
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);

        // Requête pour aller récuperer les data user dans la bdd
        $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkIfUserExists->execute(array($user_pseudo));

        // Vérifie si l'user a bien été trouvé dans la base de donnée !methode rowcount!
        if($checkIfUserExists->rowCount() > 0){

            // Les infos sont récupérées dans le tableau $usersInfos grâce à fetch
            $usersInfos = $checkIfUserExists->fetch();

            // Si le mot de passe correspond à celui inscrit dans la bdd 
            if(password_verify($user_password, $usersInfos['password'])){

            // L'user est authentifié alors la session est ouverte 
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['lastname'] = $usersInfos['lastname'];
            $_SESSION['firstname'] = $usersInfos['firstname'];
            $_SESSION['pseudo'] = $usersInfos['pseudo'];

            // Et l'user est redirigé vers la page d'accueil
            header('Location: index.php');

            // sinon l'user aura un message d'erreur
            }else{
                $errorMsg = "Votre mot de passe est incorrect";
            }

        }else{
            $errorMsg = "Votre pseudo est incorrect";
        }

        

       
    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}