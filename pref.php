<?php
session_start();
require('connexion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="public.css">
	<link rel="stylesheet" type="text/css" href="public.css">
	<link rel="stylesheet" type="text/css" href="public.css">
	<link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<title>Mes préférences</title>
</head>
<body>

	<script type="text/javascript">
			function playAudio(){
			var audio = document.getElementById("audio");
			audio.play();
		}</script>
		<a href="accueil.php">
	<div class="menu" id="menu">
	
	<img src="img/logo2.png" class="logo" Onclick="playAudio()" value="PLAY"></a>
	<audio id="audio" src="netflixsong.wav"></audio>
	
	<ul>
<?php
	echo '<p class="Hello">Bonjour '.$_SESSION['pseudo'].'</p>';
	?>
		<font size="5">
			
		<li>
			<a href="accueil.php">Accueil</a>
		</li>
		<br>
		<li>
			<a href="avis.php">Mes Avis</a>
		</li>
		<br>
		<li>
			<a href="statistique.php">Mes statistiques</a>
		</li>
		<br>
		<li>
			<a href="pref.php">Mes préférences</a>
		</li>
		<br>
		<li>
			<a href="logout.php">Déconnexion</a>
		</li>
		<br>

	<?php
	if ($_SESSION['pseudo']=='Antoine') {
		echo('<li><a href="admin.php" class="admin">Administration</a></li> ');
	}	
  

?>	</font></ul>
</div>
<style type="text/css">
	body>#menu{
  position:fixed;

}
	.series{

		margin-left: 260px;


	
	}
	.mini{
		margin-top: 8px;
		width: 190px;
		height: 190px;
		
		
		}
		body, html{
			background-color: black;
		}
		.color{
			font-family: 'Bebas Neue', cursive;
			color: white;
			font-size:14px;
		}
	.size{

		margin-left: 350px;
		width: 700px;
		height: 300px;
	}
	.Hello{
	font-size: 14px;
	color: #ff3333;
}

	.car{
		margin-left: 375px;
		word-spacing: 10px;
	}
	.red{
		color:red;
	}
	table{
		margin-left: 275px;
		transform: translateY(50px);
		width: 250px;

	}
	button{
		margin-left: 275px;
		transform: translateY(65px);
	}
	h2{
		margin-left: 275px;
		transform: translateY(50px);
	}
	li:hover{
	background-color: #ff3333;

}
	</style>

<?php 
if (!empty($_GET['p'])) {
	if ($_GET['p']=="majok") {
		
	if(!empty($_POST['grille']) && !empty($_POST['couleur_avis'] && !empty($_POST['couleur_texte'])&& !empty($_POST['FONT']))){

		$grille = $_POST['grille'];
		$couleur_avis = $_POST['couleur_avis'];
		$couleur_texte = $_POST['couleur_texte'];
		$FONT = $_POST['FONT'];
		
	$up='UPDATE  preferences SET grille = ?, couleur_avis=?, couleur_texte=?, FONT= ? WHERE id_membre = ?';
	$requete = $bdd->prepare($up);
	$requete->execute(array($grille, $couleur_avis, $couleur_texte, $FONT, $_SESSION['id']));
	$_SESSION['grille']=$grille;
	$_SESSION['couleur_avis'] = $couleur_avis;
	$_SESSION['couleur_texte']= $couleur_texte;
	$_SESSION['FONT'] = $FONT;

	header("location: accueil.php");
	}
  }
}
$QUERY= 'SELECT grille, couleur_avis, couleur_texte, FONT FROM preferences WHERE id_membre=?';
$requete = $bdd->prepare($QUERY);
$requete->execute(array($_SESSION['id']));
$ligne = $requete->fetch();
echo '<form method="post" action="pref.php?p=majok">';
echo '<h2 class="red"> Préférences :</h3>';
echo '<table border = 1>
<tr><td> <p class="red">Grille(Nombre de vignettes): </p></td><td><input type="text" name="grille" value="'.$ligne['grille'].'"> </td></tr>
<tr><td> <p class="red">Taille de la police : </p></td>
	<td>

	<select name="FONT" id="FONT-select" value="'.$ligne['FONT'].'">
	<option>14</option>
    <option>16</option>
    <option>18</option>
    <option>20</option>
	</td></tr>

<tr><td> <p class="red">Couleurs des avis : </p></td><td><input type="color" name="couleur_avis" value="'.$ligne['couleur_avis'].'"></td></tr>
<tr><td> <p class="red">Couleur du texte affiché sur les avis: </p></td><td><input type="color" name="couleur_texte" value="'.$ligne['couleur_texte'].'"> </td></tr></table>';
echo '<button type ="submit">Sauvegarder</form>';



?>
