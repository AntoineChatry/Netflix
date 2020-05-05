
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Netflix</title>
</head>
<body>

	<form method="POST">
		<table>
			
<!-- champ pseudo -->
	<p>Votre pseudo:<input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo"required autofocus></p>
		<!-- champ mdp -->
	<p>Votre mot de passe: <input type="password" name="password" id="email" placeholder="Votre mot de passe" required></p>
			
	<input  class="connect" type="submit" name="formsend" id="formsend" value="Se connecter">
	
	
	<br><!-- <audio id="audio"src="netflixsong.wav"></audio>onclick="playAudio()" fonctionne seulement sur du type = button -->
	<a href="inscription.php" class="connec"  >Créer un compte</a>
	
</table>
</form>
<?php
session_start();
require('connexion.php');


if (!empty($_POST['password'])&& !empty($_POST['pseudo'])) {
	
	$password=htmlspecialchars($_POST['password']);
	$pseudo=htmlspecialchars($_POST['pseudo']);

	$password=sha1($password);

	$query= 'SELECT count(id) as nbr, id, pseudo, admin FROM membres WHERE pseudo = ? and password=?';
	

	$requete = $bdd->prepare($query);
	$requete->execute(array( $pseudo, $password));
	$ligne = $requete->fetch();
	$nbr=$ligne['nbr'];
	$_SESSION['Admin'] = $nbr;
	$_SESSION['id'] = $ligne['id'];
 	$_SESSION['pseudo'] = $ligne['pseudo'];
 	
 	$QUERY=' SELECT grille, couleur_avis, couleur_texte, FONT, wishlist FROM preferences WHERE id_membre=?';

 	$req = $bdd->prepare($QUERY);
	$req->execute(array($_SESSION['id']));
	$pref = $req->fetch();
	$_SESSION['FONT']= $pref['FONT'];
	$_SESSION['couleur_texte']= $pref['couleur_texte'];
	$_SESSION['couleur_avis']= $pref['couleur_avis'];
 	$_SESSION['grille']= $pref['grille'];
 	$_SESSION['id_membre']= $pref['id_membre'];
 	$_SESSION['wishlist']= $pref['wishlist'];
	if ($nbr == 1) {
		header("location: accueil.php");
		
	}
}
// if ($nbr > 0) {
// 	

// }

   

?>

</body>
</html>