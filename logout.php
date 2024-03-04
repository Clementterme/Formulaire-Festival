<?php

session_start();

// Déconnexion
$_SESSION = array();
session_destroy();

// Redirection vers la page de connexion
header("location: login-admin.php");
exit;
?>
