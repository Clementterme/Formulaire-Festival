<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $adressePostale = $_POST["adressePostale"];
    $nombrePlaces = $_POST["nombrePlaces"];

    $tarifReduit = isset($_POST["tarifReduit"]) ? "Oui" : "Non"; // Si la case est cochée, renvoie "Oui", sinon "Non"
    
    $pass1jourreduit = isset($_POST["pass1jourreduit"]) ? "Oui" : "Non";
    $pass2joursreduit = isset($_POST["pass2joursreduit"]) ? "Oui" : "Non";
    $pass3joursreduit = isset($_POST["pass3joursreduit"]) ? "Oui" : "Non";

    $pass1jour = isset($_POST["pass1jour"]) ? "Oui" : "Non";
    $pass2jours = isset($_POST["pass2jours"]) ? "Oui" : "Non";
    $pass3jours = isset($_POST["pass3jours"]) ? "Oui" : "Non";

    if (isset($_POST['nbJour'])) {
        // Récupérer la valeur sélectionnée
        $nombreJour = $_POST['nbJour'];
        
        // Analyser la valeur sélectionnée pour obtenir les informations nécessaires
        if ($nombreJour == "pass1jour") {
            $choixNombreJour = "pass1jour";
        } if ($nombreJour == "pass2jours") {
            $choixNombreJour = "pass2jours";
        } if ($nombreJour == "pass3jours") {
            $choixNombreJour = "pass3jours";
        } elseif ($nombreJour !== "pass1jour" && $passSelection !== "pass2jours" && $passSelection !== "pass3jours") {
            $choixNombreJour = "null";
        }
    }

   

    if (isset($_POST['datePass1jour'])) {
        // Récupérer la valeur sélectionnée
        $datePass1jour = $_POST['datePass1jour'];
        
        // Analyser la valeur sélectionnée pour obtenir les informations nécessaires
        if ($datePass1jour == "choixJour1") {
            $choixPass1jour = "choixJour1";
        } if ($datePass1jour == "choixJour2") {
            $choixPass1jour = "choixJour2";
        } if ($datePass1jour == "choixJour3") {
            $choixPass1jour = "choixJour3";
        } elseif ($passSelection !== "choixJour1" && $passSelection !== "choixJour2" && $passSelection !== "choixJour3") {
            $choixPass1jour = "null";
        }
    }

    if (isset($_POST['datePass2jours'])) {
        // Récupérer la valeur sélectionnée
        $passSelection = $_POST['datePass2jours'];
        
        // Analyser la valeur sélectionnée pour obtenir les informations nécessaires
        if ($passSelection == "choixJour12") {
            $choixPass2Jours = "choixJour12";
            
        } if ($passSelection == "choixJour23") {
            $choixPass2Jours = "choixJour23";
        }elseif ($passSelection !== "choixJour23" && $passSelection !== "choixJour12") {
            $choixPass2Jours = "null";
        }
    }
    $ligne = "$nom,$prenom,$email,$telephone,$adressePostale,$nombrePlaces,$tarifReduit,$pass1jourreduit,$pass2joursreduit,$pass3joursreduit,$choixNombreJour,$choixPass1jour,$choixPass2Jours\n";
    file_put_contents("reservations.csv", $ligne, FILE_APPEND);

    // Réponse à l'utilisateur
    echo "Merci pour votre réservation !";
} else {
    // Si la méthode HTTP n'est pas POST, renvoyer une erreur
    http_response_code(405); // Méthode non autorisée
    echo "Méthode non autorisée";
}
?>
