<?php
	session_start(); 
	
	require('connexion.php');	//Connexion à la Base de Données
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="public.css">
	<link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<title>Séries/Film</title>
<!-- CSS imbriqué -->
<style>
	.rouge{
		color:#990000;
	}
	.text{

		width: 450px;
	}
	.siz{
		width: 320px;
		height: 320px;

	}
	.size{

		margin-left: 350px;
		width: 700px;
		height: 300px;
	}
	.car{
		margin-left: 375px;
		word-spacing: 10px;
	}
	.red{
		color: red;
	}
	body, html
	{
		background-color: black;
		
		text-align: center;
	}
	
	.color{
			font-family: 'Bebas Neue', cursive;
			color: white;
			font-size:14px;
		}
	table
	{

		color: white;
		width: 80%;
		margin-left: 255px;
	}
	tr:nth-child(even) 
	{
		background-color: #e60000;
	}
	body>#menu{
  position:fixed;

}
</style>

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
		
		<font size="5">
		<li>
			<a href="minimynetflix.php">Les Séries</a>
		</li>
		<br>
		<li>
			<a href="admin_membres.php">Les Membres</a>
		</li>
		<br>
		<li>
			<a href="admin_avis.php">Les Avis</a>
		</li>
		<br>
		<li>
			<a href="admin_stats.php">Statistiques</a>
		</li>
		<br>
		<li>
			<a href="admin_search.php">Recherche</a>
		</li>
		<br>
		<li>
			<a href="logout.php">Déconnexion</a>
			
		</li>
		<br>
		<li>
		<a href="accueil.php">Accueil</a>
		</li>
		<br>
	</font>
	</ul>
</div>
<?php

//////////////////////////////////////////////////
	// ***Lien p=updateFromImg issu d'une Image***
	if( !empty($_GET['p']) && $_GET['p']=="updateFromImg" )	//SI le lien est de type "p=updateFromImg"
	{
		if (!empty($_GET['id'])) {
	
	$id= (int)$_GET['id'];
	$query = 'SELECT id, nom,serie_ou_film, thematique,image, image_mini,resume, trailer, date_format(date_creation,\'%d/%m/%Y \') as date_creation FROM series WHERE id= ?';
	
	$requete = $bdd->prepare($query);
	
	$requete->execute(array($id));
	$ligne= $requete->fetch();
	echo '<div class="color">';
	echo '<div><img class ="size" src="series/'.$ligne['image'].'"></div>';
	echo '<div class="car"><h2 class ="red">Titre: </h2><h2> '.$ligne['nom'].'</div></h2>';
	echo '<div class="car"><h2 class="red"> Thématique: </h2><h2>'.$ligne['thematique'].'</div></h2>';
		if ($ligne['serie_ou_film']==1) 
		{
			echo'<div class="car"><h2 class="red">Série ou Film:</h2><h2> Série </h2></div>';
		}
		else
		{
			echo'<div class="car"><h2 class="red">Série ou Film:</h2><h2> Film </h2></div>';
		}
		echo '<div class="car"><h2 class="red"> Date: </h2><h2>'.$ligne['date_creation'].'</div></h2>';
		// echo '<div class="car"><h2> Série ou Film: '.$ligne['serie_ou_film'].'</div></h2>';
		echo '<div class="car"><h2 class ="red"> Résumé: </h2><h2>'.$ligne['resume'].'</div></h2>';
		echo '<div class="car"><h2 class ="red"> Trailer: </h2><h2> '.$ligne['trailer'].'</div></h2>';
		echo'</div>';
	}
	exit();
	}
	// même principe d'affichage que sur l'accueil
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	

	

	// ***Lien p=update issu d'un Lien Hypertexte***
	if( !empty($_GET['p']) && $_GET['p']=="update" )	//SI le lien est de type "p=update"
	{
		if( !empty($_GET['id']) )	//SI "id="
		{
			$id = (int)$_GET['id'];	//id est bien un entier	?
			
			$query = 'SELECT id, nom,serie_ou_film, thematique,image, image_mini,resume, trailer, date_format(date_creation,\'%d/%m/%Y \') as date_creation FROM series WHERE id= ?';
	
	$requete = $bdd->prepare($query);
	
	$requete->execute(array($id));
	$ligne= $requete->fetch();
	echo '<form method="post"action="minimynetflix.php?p=majok&id='.$id.'">';
	echo '<div class="color">';
	echo '<div><img class ="size" src="series/'.$ligne['image'].'"></div>';
	echo '<div class="car"><h2 class ="red">Titre: </h2><h2><textarea class="tex" name="titre">'.$ligne['nom'].'</textarea></div></h2>';
	echo '<div class="car"><h2 class="red"> Thématique: </h2><h2>'.$ligne['thematique'].'</div></h2>';
		if ($ligne['serie_ou_film']==1) 
		{
			echo'<div class="car"><h2 class="red">Série ou Film:</h2><h2> Série </h2></div>';
		}
		else
		{
			echo'<div class="car"><h2 class="red">Série ou Film:</h2><h2> Film </h2></div>';
		}
		echo '<div class="car"><h2 class="red"> Date: </h2><h2>'.$ligne['date_creation'].'</div></h2>';
		// echo '<div class="car"><h2> Série ou Film: '.$ligne['serie_ou_film'].'</div></h2>';
		echo '<div class="car"><h2 class ="red">Résumé: </h2><h2><textarea class="tex" name="resume">'.$ligne['resume'].'</textarea></div></h2>';
		echo '<div class="car"><h2 class ="red"> Trailer: </h2><h2> '.$ligne['trailer'].'</div></h2>';
		echo'<div class="car"> ';
		echo '<button type ="submit">Sauvegarder';
		echo'</div></form>';

		}
		exit();
	}
	if (!empty($_GET['p'])) {
	if (!empty($_GET['p']=="majok")) {
		$id = $_GET['id'];	
		$nom = $_POST['titre'];
		$resume = $_POST['resume'];
	
		
	$up='UPDATE series SET nom=?,resume=? WHERE id= ?';
	$requete = $bdd->prepare($up);
	$requete->execute(array($nom, $resume, $id));
	
	
  }
}
	
	//***Lien p=delete***
	if( !empty($_GET['p']) && $_GET['p']=="delete" )	//SI le lien est de type "p=delete"
	{
		if( !empty($_GET['id']) )	//SI "id="
		{
			$nom=
			$id = (int)$_GET['id'];
			$del = 'DELETE FROM series WHERE id= ?';
	
		$requete = $bdd->prepare($del);
		$requete->execute(array($id));
		}
	}





	//AFFICHAGE PAR DEFAUT D'UNE TABLE DE SERIES/FILMS

	//PREMIERE REQUETE pour donner le NOMBRE de séries dans la table
	//Calcul combien de séries dans la table, UN seul résultat retourné
	$QUERY = 'SELECT count(id) as nbr FROM series';
	$requete = $bdd->prepare($QUERY);	//On prépare la Requête
	$requete->execute();	//On exécute la Requête
	$ligne = $requete->fetch();	//On ramène le résultat
	$nbr_series = $ligne['nbr'];//Résultat, nombre de séries renvoyé
	
	//Affichage du nombre de séries
	echo '<br><h1 class="rouge">Il y a '.$nbr_series.' séries/films dans votre catalogue:</h1>';
	
	
	//DEUXIEME REQUETE
	//Liste complète des séries, PLUSIEURS lignes retournées => donc on met tout dans une boucle WHILE plus bas	
	//Conversion de la Date au format jj/mm/aaaa
	//***IL FAUT METTRE UN ALIAS t1 pour la table SI on utilise date_format ***
	$QUERY = 'SELECT t1.id, t1.nom, t1.thematique, t1.serie_ou_film, date_format(t1.date_creation,\'%d/%m/%Y\') as date_creation, t1.image_mini 
				FROM series t1
				ORDER BY t1.id ASC';
	$requete = $bdd->prepare($QUERY);	//On prépare la Requête
	$requete->execute();	//On exécute la Requête
// ORDER BY t1.date_creation ASC

	//Début Table 
	//On peut mettre border=0 si on veut
	echo '<table border="1">
			<tr>
				<th>Série</th>
				<th>Titre</th>
				<th>Thème</th>
				<th>Série|Film</th>
				<th>Date catalogue</th>
				<th><i>Action possible</i></th>
			</tr>';					
	
	//On ramène le résultat
	//On gère les lignes retournées de la Requête dans une boucle WHILE
	//CHAQUE CHAMP de la table est ramené avec le format $ligne['nom_du_champ_SELECT']
	while($ligne = $requete->fetch())
	{
		//Série ou Film en utilisant une condition TERNAIRE
		$serie_ou_film = ($ligne['serie_ou_film'] == 1) ? 'SERIE' : 'FILM';
		
		//Affichage de la table avec les valeurs des champs retournés
		echo '<tr>
				<td><a href="minimynetflix.php?p=updateFromImg&id='.$ligne['id'].'"><img class ="siz" src="series/'.$ligne['image_mini'].'" /></a></td>
				<td>'.$ligne['nom'].'</td>
				<td>'.$ligne['thematique'].'</td>
		        <td>'.$serie_ou_film.'</td>
		        <td>'.$ligne['date_creation'].'</td>
				<td><a href="minimynetflix.php?p=update&id='.$ligne['id'].'">Mise à jour</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="minimynetflix.php?p=delete&id='.$ligne['id'].'">Supprimer</a></td>
			  </tr>';
		
	}

	echo '</table>';	//FIN Table
	
	$requete->closeCursor();	//On FERME la connexion avec la table, c'est plus propre
	

?>
<style type="text/css">
	li:hover
{
	background-color: #ff3333;
}
</style>
</body>
</html>


