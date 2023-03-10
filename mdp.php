<?php
if(isset($_POST['login'])){
	//mot de passe envoyé
	$pass = $_POST['pass'];
	//vrai mot de passe
	$mon_mot_de_pass = "toto";
	//si les 2 sont égaux
	if($pass == $mon_mot_de_pass){
		//ici l'action à faire si c'est bon
	}
	//si pas égaux
	else{
		echo 'Erreur de mot de passe.';
	}
}
	?>

<form name="login" action="#" method="post">
<input type="password" name="pass" value=""/>
<input type="submit" name="login" value="login" />
</form>
