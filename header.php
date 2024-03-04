<?php
$url = $_SERVER['REQUEST_URI'];
switch ($url) {
  case str_contains($url, 'tableau-de-bord'):
    $url = 'tableau-de-bord';
  break 1;
  case str_contains($url, 'tableau-admin'):
    $url = 'tableau-admin';
  break 1;

  default:
    $url = 'form';
  break 1;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vercors Music Festival</title>
  <link rel="stylesheet" href="./assets/header.css">
  <?php if ($url == 'tableau-de-bord') { ?>
    <link rel="stylesheet" href="assets/dashboard.css">
  <?php } else if ($url == 'tableau-admin') { ?>
    <link rel="stylesheet" href="assets/dashboard.css">
    <link rel="stylesheet" href="assets/admin.css">
  <?php } else {?>
    <link rel="stylesheet" href="assets/form.css">
  <?php } ?>
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="assets/script.js" defer></script>
</head>
<header>

  <div id="header">
    <div class="logo">
      <img src="./image/vercors_festival_music.png" alt="logo">
    </div>
    <div class="connexion">
      <?php if (isset($_SESSION['connecté'])) { ?>
        <a href="deconnexion.php">Déconnexion</a>
      <?php } else { ?>
        <a href="login-admin.php">Connexion Admin</a>
      <?php } ?>
    </div>
  </div>
 
</header>