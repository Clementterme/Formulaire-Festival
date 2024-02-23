<?php

// Réponse à l'utilisateur
echo "Merci pour votre réservation !";
?>

<h2>Récapitulatif réservation</h2>
<ul>
<li>Nom : <?php echo $_GET["nom"]; ?></li>
<li>Prénom : <?php echo $_GET["prenom"]; ?></li>
<li>Email : <?php echo $_GET["email"]; ?></li>
<li>Nombre de places : <?php echo $_GET["nombrePlaces"]; ?></li>
<li>Tarif réduit : <?php echo $_GET["tarifReduit"]; ?></li>
<li>Pass réduits : <?php echo $_GET["choixNombreJourReduit"]; ?></li>
<li>Pass : <?php echo $_GET["choixNombreJour"]; ?></li>
<li>Jour choisit : <?php echo $_GET["choixPass1jour"]; ?></li>
<li>Jours choisits : <?php echo $_GET["choixPass2Jours"]; ?></li>
<li>Tente nuit 1 : <?php echo $_GET["tenteNuit1"]; ?></li>
<li>Tente nuit 2 : <?php echo $_GET["tenteNuit2"]; ?></li>
<li>Tente nuit 3 : <?php echo $_GET["tenteNuit3"]; ?></li>
<li>Tente 3 nuits : <?php echo $_GET["tente3Nuits"]; ?></li>
<li>Van nuit 1 : <?php echo $_GET["vanNuit1"]; ?></li>
<li>Van nuit 2 : <?php echo $_GET["vanNuit2"]; ?></li>
<li>Van nuit 3 : <?php echo $_GET["vanNuit3"]; ?></li>
<li>Van 3 nuits : <?php echo $_GET["van3Nuits"]; ?></li>
<li>Enfants : <?php echo $_GET["enfant"]; ?></li>
<li>Casques enfant : <?php echo $_GET["nombreCasquesEnfants"]; ?></li>
<li>Luge été : <?php echo $_GET["nombreLugesEte"]; ?></li>
<li> <?php echo "Total réservation : ".$_GET["prixTotal"]."€"; ?></li>
</ul>
