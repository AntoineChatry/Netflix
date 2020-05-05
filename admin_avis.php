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
	<title>Avis Admin</title>
</head>
<body>
	<script type="text/javascript">
			function playAudio(){
			var audio = document.getElementById("audio");
			audio.play();
		}</script>
		<a href="#">
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

if (!empty($_GET['p']) && $_GET['p']=="delete") 
{
	if (!empty($_GET['id'])) {
	
	$id= (int)$_GET['id'];
	$id_membre = (int)$_GET['mbr'];

	$del = 'DELETE FROM avis WHERE id_membre= ? and id_serie= ?';
	
	$requete = $bdd->prepare($del);
	$requete->execute(array($id_membre, $id));
	
	}
}

// $QUERY = 'SELECT count(*) as nbr
// 		FROM avis t1
// 		WHERE t1.id_serie = ?';

// $QUERY = 'SELECT avg(t1.note) as notemoy
// 					FROM avis t1, membres t2, series t3 
// 					WHERE t1.id_serie=t3.id and t1.id_membre=t2.id and t1.id_serie = ?
// 					ORDER BY t1.date_creation DESC';

// $QUERY = 'SELECT t2.pseudo as pseudo, t1.note as note , date_format(t1.date_creation,\'%d/%m/%Y à %H:%i\') as date_creation, t1.commentaire as commentaire
// 					FROM avis t1, membres t2, series t3 
// 					WHERE t1.id_serie=t3.id and t1.id_membre=t2.id and t1.id_serie = ?
// 					ORDER BY t1.date_creation DESC';

// $QUERY = 'SELECT count(*) as nbr
// 		FROM avis t1, membres t2, series t3 
// 		WHERE t1.id_serie=t3.id and t1.id_membre=t2.id';

$QUERY = 'SELECT t2.pseudo as pseudo, t3.nom as nom, t1.note as note, date_format(t1.date_creation,\'%d/%m/%Y à %H:%i\') as date_creation, t3.image_mini as image, t1.id_serie as id, t1.id_membre as membre, t1.commentaire as commentaire
				FROM avis t1, membres t2, series t3 
				WHERE t1.id_serie=t3.id and t1.id_membre=t2.id
				ORDER BY t1.date_creation DESC';

	$requete = $bdd->query($QUERY);
	echo'<table border = 1>';
	echo'<tr><td> Série: </td><td> Membre: </td><td> Note </td><td>Commentaire</td><td>Date</td><td><br></tr>';
	while ($ligne = $requete->fetch()) 
	{
		echo '<tr><td><img class= "size" src="series/'.$ligne['image'].'"></td><td>'.$ligne['pseudo'].'</td><td> &nbsp; &nbsp;'.$ligne['note'].'&nbsp; &nbsp; </td><td>'.$ligne['commentaire'].'</td><td>'.$ligne['date_creation'].'</td><td><a href="admin_avis.php?p=delete&id='.$ligne['id'].''.$ligne['membre'].'">Supprimer</a></td></tr>';
	}
	echo'</table>';

?>
<style type="text/css">
	body,html{
		font-family: 'Bebas Neue', cursive;
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
	.size{
		
		width: 320px;
		height: 320px;
	}
	table{
		margin-left: 325px;

	}
	body>#menu{	
  position:fixed;

}
tr:nth-child(even) 
	{
		background-color: #e60000;
	}
	li:hover{
		background-color: #ff3333;
	}
</style>
</body>
</html>