<?php
session_start();

// Déconnexion de l'utilisateur
$_SESSION = array();
session_destroy();

// Redirection vers la page de connexion
header("location: login.php");
exit;
?>
