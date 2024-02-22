<?php
session_start();

// Fonction pour ajouter les données au fichier CSV
function ajouterAuCSV($donnees) {
    // Chemin vers le fichier CSV
    $fichierCSV = "/../reservations.csv";

    // Ouvrir le fichier CSV en mode écriture
    $fichier = fopen($fichierCSV, 'a');

    // Vérifier si le fichier a pu être ouvert
    if ($fichier) {
        // Écrire les données dans le fichier CSV
        fputcsv($fichier, $donnees);

        // Fermer le fichier
        fclose($fichier);

        return true;
    } else {
        return false;
    }
}

// Vérifier si les données sont soumises via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $adressePostale = $_POST["adressePostale"];

    // Créer un tableau avec les données du formulaire
    $donnees = array(
        $nom,
        $prenom,
        $email,
        $telephone,
        $adressePostale
        // Ajoutez d'autres champs ici selon votre formulaire et votre structure CSV
    );

    // Appeler la fonction pour ajouter les données au fichier CSV
    $ajoutReussi = ajouterAuCSV($donnees);

    // Vérifier si l'ajout a réussi
    if ($ajoutReussi) {
        echo "Les données ont été ajoutées avec succès au fichier CSV.";
    } else {
        echo "Une erreur s'est produite lors de l'ajout des données au fichier CSV.";
    }
}
?>
