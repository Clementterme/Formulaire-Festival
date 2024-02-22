<!-- <?php
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
</head>
<body>
    <h1>Liste des réservations</h1>
    <table>
        <tr>
            <th>Nombre de places</th>
            <th>Tarif réduit</th>
            <!-- Ajouter d'autres en-têtes de colonnes pour d'autres champs -->
        </tr>
        <?php foreach ($reservations as $reservation): ?>
        <tr>
            <td><?php echo $reservation[0]; ?></td>
            <td><?php echo $reservation[1]; ?></td>
            <!-- Afficher d'autres données de la même manière -->
        </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="logout.php">Se déconnecter</a></p>
</body>
</html> -->
