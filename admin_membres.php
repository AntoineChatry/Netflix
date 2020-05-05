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
	<link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<title>Admin membres</title>
</head>
<body>
	<script type="text/javascript">
			function playAudio(){
			var audio = document.getElementById("audio");
			audio.play();
		}</script>
		<a href="accueil.php">
	<div class="menu" id="menu">
	<img src="img/logo2.png" class="logo"Onclick="playAudio()" value="PLAY"></a>
	<audio id="audio" src="netflixsong.wav"></audio>
	<ul>
		
		<font size="5">
		<li>
			<a href="minimynetflix.php">Les Séries</a>
		</li>
		<br>
		<li>
			<a href="#">Les Membres</a>
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
	// $QUERY = 'SELECT count(*) as nbr FROM membres';

	$QUERY = 'SELECT pseudo, email, password, date_format(date_creation,\'%d/%m/%Y à %H:%i\') as date_creation, admin  
				FROM membres
				ORDER BY date_creation DESC';
	
	$requete = $bdd->query($QUERY);
	echo'<table class="membres" border=1>
			<tr>
			<th></th>
			<th></th>
			</tr>';
	echo'<tr><td><p> Nom: </p></td><td> <p>Mot de passe: </p></td><td><p> Admin</p></td><td><p>Date de création</p></td></tr>';
	while ($ligne = $requete->fetch()) {
		if($ligne['admin']==1) {
		$admin= 'ADMIN';
	}
	else{
		$admin= '';
	}
		echo '<tr> <td>'.$ligne['pseudo'].'</td> <td>'.$ligne['password'].'</td> <td>'.$admin.'</td><td>'.$ligne['date_creation'].'</td></tr>';
	}
	
	echo'</table>';
?>
<style type="text/css">
	body,html{
		color: white;
		background-color: black;
	}
	.membres{
		border-style: dashed solid;
		border-width: 2px;
		width: 50%;
		margin-left: 400px;
		transform: translateY(175px);
	}
	body>#menu{
  position:fixed;
}
p{
	color:red;
}
li:hover{
	background-color: #ff3333;

}
</style>
</body>
</html>