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

    if (isset($_POST['nbJourReduit'])) {
        // Récupérer la valeur sélectionnée
        $nombreJourReduit = $_POST['nbJourReduit'];
        
        // Analyser la valeur sélectionnée pour obtenir les informations nécessaires
        if ($nombreJourReduit == "pass1jourreduit") {
            $choixNombreJourReduit = "pass1jourReduit";
            $prixChoixNombreJourReduit = 25;
        } if ($nombreJourReduit == "pass2joursreduit") {
            $choixNombreJourReduit = "pass2joursReduit";
            $prixChoixNombreJourReduit = 50;
        } if ($nombreJourReduit == "pass3joursreduit") {
            $choixNombreJourReduit = "pass3joursReduit";
            $prixChoixNombreJourReduit = 65;
        }
    }if (!isset($_POST['nbJourReduit'])) {
        $choixNombreJourReduit = "null";
        $prixChoixNombreJourReduit = 0;
    }



    if (isset($_POST['nbJour'])) {
        // Récupérer la valeur sélectionnée
        $nombreJour = $_POST['nbJour'];
        
        // Analyser la valeur sélectionnée pour obtenir les informations nécessaires
        if ($nombreJour == "pass1jour") {
            $choixNombreJour = "pass1jour";
            $prixChoixNombreJour = 40;
        } if ($nombreJour == "pass2jours") {
            $choixNombreJour = "pass2jours";
            $prixChoixNombreJour = 70;
        } if ($nombreJour == "pass3jours") {
            $choixNombreJour = "pass3jours";
            $prixChoixNombreJour = 100;
        }
    }if (!isset($_POST['nbJour'])) {
        $choixNombreJour = "null";
        $prixChoixNombreJour = 0;
    }

   
    if (isset($_POST['datePass1jour'])) {
        // Récupérer la valeur sélectionnée
        $datePass1jour = $_POST['datePass1jour'];
        
        // Analyser la valeur sélectionnée pour obtenir les informations nécessaires
        if ($datePass1jour == "choixJour1") {
            $choixPass1jour = "Jour1";
        } if ($datePass1jour == "choixJour2") {
            $choixPass1jour = "Jour2";
        } if ($datePass1jour == "choixJour3") {
            $choixPass1jour = "Jour3";
        }
    }if (!isset($_POST['datePass1jour'])) {
        $choixPass1jour = "null";
    }

    
    if (isset($_POST['datePass2jours'])) {
        // Récupérer la valeur sélectionnée
        $passSelection = $_POST['datePass2jours'];
        
        // Analyser la valeur sélectionnée pour obtenir les informations nécessaires
        if ($passSelection == "choixJour12") {
            $choixPass2Jours = "Jour12";
            
        } if ($passSelection == "choixJour23") {
            $choixPass2Jours = "Jour23";
        }
    }if (!isset($_POST['datePass2jours'])) {
        $choixPass2Jours = "null";
    }



    $tenteNuit1 = isset($_POST["tenteNuit1"]) ? "Oui" : "Non";
    if ($tenteNuit1 == "Oui"){
        $prixTenteNuit1 = 5;
    }else{
        $prixTenteNuit1 = 0;
    }

    $tenteNuit2 = isset($_POST["tenteNuit2"]) ? "Oui" : "Non";
    if ($tenteNuit2 == "Oui"){
        $prixTenteNuit2 = 5;
    }else{
        $prixTenteNuit2 = 0;
    }

    $tenteNuit3 = isset($_POST["tenteNuit3"]) ? "Oui" : "Non";
    if ($tenteNuit3 == "Oui"){
        $prixTenteNuit3 = 5;
    }else{
        $prixTenteNuit3 = 0;
    }

    $tente3Nuits = isset($_POST["tente3Nuits"]) ? "Oui" : "Non";
    if ($tente3Nuits == "Oui"){
        $prixTente3Nuits = 12;
    }else{
        $prixTente3Nuits = 0;
    }



    $vanNuit1 = isset($_POST["vanNuit1"]) ? "vanNuit1" : "Non";
    if ($vanNuit1 == "Oui"){
        $prixVanNuit1 = 5;
    }else{
        $prixVanNuit1 = 0;
    }

    $vanNuit2 = isset($_POST["vanNuit2"]) ? "vanNuit2" : "Non";
    if ($vanNuit2 == "Oui"){
        $prixVanNuit2 = 5;
    }else{
        $prixVanNuit2 = 0;
    }

    $vanNuit3 = isset($_POST["vanNuit3"]) ? "vanNuit3" : "Non";
    if ($vanNuit3 == "Oui"){
        $prixVanNuit3 = 5;
    }else{
        $prixVanNuit3 = 0;
    }

    $van3Nuits = isset($_POST["van3Nuits"]) ? "van3Nuits" : "Non";
    if ($van3Nuits == "Oui"){
        $prixVan3Nuits = 12;
    }else{
        $prixVan3Nuits = 0;
    }



    if (isset($_POST['enfants'])) {
        
        $enfants = $_POST['enfants'];
        
        if ($enfants == "enfantsOui") {
            $enfant = "Oui";
            
        } if ($enfants == "enfantsNon") {
            $enfant = "Non";
        }
    }

    $nombreCasquesEnfants = $_POST["nombreCasquesEnfants"];

    $nombreLugesEte = $_POST["NombreLugesEte"];


    $ligne = "$nom,$prenom,$email,$telephone,$adressePostale,$nombrePlaces,$tarifReduit,$choixNombreJourReduit,$choixNombreJour,$choixPass1jour,$choixPass2Jours,$tenteNuit1,$tenteNuit2,$tenteNuit3,$tente3Nuits,$vanNuit1,$vanNuit2,$vanNuit3,$van3Nuits,$enfant,$nombreCasquesEnfants,$nombreLugesEte\n";
    file_put_contents("reservations.csv", $ligne, FILE_APPEND);
    
} else {
    // Si la méthode HTTP n'est pas POST, renvoyer une erreur
    http_response_code(405); // Méthode non autorisée
    echo "Méthode non autorisée";
}


$prixTotal = (($prixChoixNombreJourReduit + $prixChoixNombreJour) * $nombrePlaces) + $prixTenteNuit1 + $prixTenteNuit2 + $prixTenteNuit3 + $prixTente3Nuits + $prixVanNuit1 + $prixVanNuit2 + $prixVanNuit3 + $prixVan3Nuits + ($nombreCasquesEnfants * 2) + ($nombreLugesEte * 5);

header("location:reservation.php?prixTotal=$prixTotal&nom=$nom&prenom=$prenom&email=$email&nombrePlaces=$nombrePlaces&tarifReduit=$tarifReduit&choixNombreJourReduit=$choixNombreJourReduit&choixNombreJour=$choixNombreJour&choixPass1jour=$choixPass1jour&choixPass2Jours=$choixPass2Jours&tenteNuit1=$tenteNuit1&tenteNuit2=$tenteNuit2&tenteNuit3=$tenteNuit3&tente3Nuits=$tente3Nuits&vanNuit1=$vanNuit1&vanNuit2=$vanNuit2&vanNuit3=$vanNuit3&van3Nuits=$van3Nuits&enfant=$enfant&nombreCasquesEnfants=$nombreCasquesEnfants&nombreLugesEte=$nombreLugesEte");
?>
