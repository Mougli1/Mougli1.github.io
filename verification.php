<?php
// Vérifier les informations de connexion
if ($_POST['identifiant'] == 'pipi' && $_POST['motdepasse'] == 'caca') {
	// Informations de connexion correctes, afficher la page "bravo"
	echo '<h1>Bravo !</h1>';
} else {
	// Informations de connexion incorrectes, demander à l'utilisateur de réessayer
	echo '<h1>Identifiant ou mot de passe incorrect</h1>';
	echo '<a href="index.html">Réessayer</a>';
}
?>
