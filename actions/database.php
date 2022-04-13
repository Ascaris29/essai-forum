<?php

// code de connexion à la base de données sinon message d'erreur


try{
    
    $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root', 'root');
}catch (Exception $e){
    die ('Une erreur a été trouvée : ' . $e->getMessage());
}


