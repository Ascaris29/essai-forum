<?php

// Si l'user n'est pas authentifier, il est redirigé vers la page login


if(!isset($_SESSION['auth'])){

    header('Location: login.php');

}