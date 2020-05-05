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
	<title>Statistique</title>
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
  

?></font>
	</ul>
</div>

<?php 
 $QUERY= 'SELECT t2.pseudo as pseudo,t3.nom as nom, t2.id as id, t1.note as note , date_format(t1.date_creation,\'%d/%m/%Y à %H:%i\') as date_creation, t3.image_mini as image_mini FROM avis t1, membres t2, series t3 WHERE t1.id_serie = t3.id AND t1.id_membre = t2.id AND t2.id = ? ';

 	$requete= $bdd->prepare($QUERY);
 	$requete->execute(array($_SESSION['id']));
 	echo '<table border="1	">
			<tr>
				<th>Nom</th>
				<th>Note</th>
				<th>Date</th>
			</tr>';					
	
	//On ramène le résultat
	//On gère les lignes retournées de la Requête dans une boucle WHILE
	while($ligne = $requete->fetch())
	{
		
		//Affichage de la table avec les valeurs des champs retournés
		echo '<tr>
				<td><img src="series/'.$ligne['image_mini'].'" /></td>
				<td>&nbsp; &nbsp; &nbsp;'.$ligne['note'].'&nbsp; &nbsp; &nbsp;</td>
		        <td>'.$ligne['date_creation'].'</td>
			  </tr>';
		
	}

	echo '</table>';
?>
<style type="text/css">

	img{
		width: 300px;
		height: 300px;
	}
	table{
		color: white;
		transform: translateX(455px);
	}
	body,html{
	background-color: black;
	font-family: 'Bebas Neue', cursive;
	}
	.Hello{
	font-size: 14px;
	color: #ff3333;
}
li:hover{
	background-color: #ff3333;

}
.te{
	width: 50px;
	height: 50px;
	transform: translateX(575px);
	display: inline-block;
}
.footer{
	background-color: #cc0000;
}
tr:nth-child(even){
	background-color: red;
}
</style>	
<!-- <br>
<br>
<div class="footer">
<a href="twitter.com"><img class="te" src="twitter.png"></a>
<a href="facebook.com"><img class="te" src="facebook.png"></a>
<a href="instagram.com"><img class="te" src="instagram.png"></a>
<br>
</div> -->
</body>


</html>