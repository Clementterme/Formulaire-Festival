<?php
session_start();

// Vérification de l'authentification
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];

    // Vérifier le mot de passe
    if ($password === "0000") {
        $_SESSION["loggedin"] = true;
        header("location: admin.php");
        exit;
    } else {
        $login_err = "Mot de passe incorrect";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Connexion</title>
</head>
<body>
    <h1>Connexion Admin</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Connexion</button>
    </form>
    <?php if (isset($login_err)): ?>
    <p><?php echo $login_err; ?></p>
    <?php endif; ?>
</body>
</html>
