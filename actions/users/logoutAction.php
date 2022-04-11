<?php 

// La page de deconnexion est activée donc les sessions sont detruites et l'user est redirigée vers la page login qui n'est pas dans le dossier actions
session_start();
$_SESSION = [];
session_destroy();
header('Location:../../login.php');