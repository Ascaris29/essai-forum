<?php

// Si l'user n'est pas authentifier, il est redirigé vers la page login

session_start();
if(!isset($_SESSION['auth'])){

    header('Location: login.php');

}