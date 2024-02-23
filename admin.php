<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// Afficher la liste des réservations depuis le fichier CSV ou la base de données
$reservations = array_map('str_getcsv', file('reservations.csv'));

// Afficher les réservations dans un tableau HTML ou d'une autre manière
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Liste des réservations</title>
    <link rel="stylesheet" href="./assets/admin.css">
</head>
<body>
    <h1>Liste des réservations</h1>
    <table class="tableau-utilisateurs">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Adresse</th>
                <th>Nombre de places</th>
                <th>Tarif réduit</th>
                <th>Pass réduits</th>
                <th>Pass</th>
                <th>Jour choisit</th>
                <th>Jours choisits</th>
                <th>Tente nuit 1</th>
                <th>Tente nuit 2</th>
                <th>Tente nuit 3</th>
                <th>Tente 3 nuits</th>
                <th>Van nuit 1</th>
                <th>Van nuit 2</th>
                <th>Van nuit 3</th>
                <th>Van 3 nuits</th>
                <th>Enfants</th>
                <th>Casques enfant</th>
                <th>Luge été</th>
            </tr>
        </thead>
        <?php foreach ($reservations as $reservation): ?>
        <tr>
            <td><?php echo $reservation[0]; ?></td>
            <td><?php echo $reservation[1]; ?></td>
            <td><?php echo $reservation[2]; ?></td>
            <td><?php echo $reservation[3]; ?></td>
            <td><?php echo $reservation[4]; ?></td>
            <td><?php echo $reservation[5]; ?></td>
            <td><?php echo $reservation[6]; ?></td>
            <td><?php echo $reservation[7]; ?></td>
            <td><?php echo $reservation[8]; ?></td>
            <td><?php echo $reservation[9]; ?></td>
            <td><?php echo $reservation[10]; ?></td>
            <td><?php echo $reservation[11]; ?></td>
            <td><?php echo $reservation[12]; ?></td>
            <td><?php echo $reservation[13]; ?></td>
            <td><?php echo $reservation[14]; ?></td>
            <td><?php echo $reservation[15]; ?></td>
            <td><?php echo $reservation[16]; ?></td>
            <td><?php echo $reservation[17]; ?></td>
            <td><?php echo $reservation[18]; ?></td>
            <td><?php echo $reservation[19]; ?></td>
            <td><?php echo $reservation[20]; ?></td>
            <td><?php echo $reservation[21]; ?></td>
            
        </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="logout.php">Se déconnecter</a></p>
</body>
</html>