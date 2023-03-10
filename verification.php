<?php
// Vérification de l'identifiant et du mot de passe
$identifiant_valide = "pipi";
$motdepasse_valide = "caca";

if (isset($_POST['identifiant']) && isset($_POST['motdepasse'])) {
	if ($_POST['identifiant'] === $identifiant_valide && $_POST['motdepasse'] === $motdepasse_valide) {
		// Identifiant et mot de passe corrects, afficher la page "bravo"
		header("Location: bravo.html");
		exit();
	} else {
		// Identifiant ou mot de passe incorrect, afficher un message d'erreur
		echo "Identifiant ou mot de passe incorrect. Veuillez réessayer.";
	}
}
