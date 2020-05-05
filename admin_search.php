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
	<link rel="stylesheet" type="text/javascript" href="main.js">
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
	<title>Recherche</title>
</head>
<body>
	<style type="text/css">
		input{
	color: white;
    border: none;
    padding: 10px;
    margin: 10px;
    height: 15px;
    width: 500px;
    border:0.5px solid #faebea;
    outline:none;
    background-color: black;
    border-radius: 12px;
    }
	input:hover{
	    border-color: #a0a0a0 #b9b9b9 #b9b9b9 #b9b9b9;
	}
	input:focus{
	    border-color:#4d90fe;
	    color: white;
	    border-radius: 10px;
	}

	input[type="submit"] {
	    border-radius: 3px;
	    background: #f2f2f2;
	    border: 1px solid #f2f2f2;
	    color: #757575;
	    cursor: default;
	    font-size: 14px;
	    font-weight: bold;
	    width: 100px;
	    padding: 0 16px;
	    height:36px;
	}
	input[type="submit"]:hover {
	    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
	    opacity: 0.55;
	    border-radius: 16px;
	    transition: 0.6s;
	    background: #f8f8f8;
	    border: 1px solid #c6c6c6;
	    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
	    color: #222;
	}
	li:hover{
	background-color: #ff3333;

}
body,html{
	font-family: 'Bebas Neue', cursive;
}

	.main{
	    transform: translateY(50%);
	    text-align: center;
	    margin-left: 225px;
	}
	tr, table, td{
		margin-top: 50px;
		text-align: center;
		margin-left: 400px;
		color: white;
		font-size: 18px;
	}
	body,html{
		background-color: black;
	}
	</style>
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
			<a href="admin_series.php">Les Séries</a>
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
<!-- search bar -->
<form method="POST">
	<div class="main">
		<input type="text" placeholder="Chercher des Avis" name="Chercher" autofocus>
		<input type="submit" value="Chercher" name="formsend">

	</div>
</form>
	<?php
	if (!empty ($_POST['Chercher'])) {
		$search = $_POST['Chercher'];
	$query= 'SELECT t2.pseudo as pseudo,t3.nom as nom, t1.note as note , date_format(t1.date_creation,\'%d/%m/%Y à %H:%i\') as date_creation, t1.commentaire as commentaire FROM avis t1, membres t2, series t3 WHERE t1.id_serie = t3.id AND t1.id_membre = t2.id AND t1.commentaire LIKE "%' .$search.'%" ';
	$requete = $bdd->query($query);
	// $nbr=$ligne['nbr'];
	echo '<table border= "1">
		<tr>
			<th></th> 
			<th></th>
		</tr>
		';
	while($ligne = $requete->fetch())
	{
		echo '<tr> <td>'.$ligne['pseudo'].'</td> <td>'.$ligne['date_creation'].'<br>'.'</td> <td>'.str_replace($search,'<mark>'.$search.'</mark>', $ligne['commentaire']).'</td><td>'.$ligne['nom'].'</td></tr>';
	
		
	}
	$requete->closeCursor();
}
	
	 ?>
<!-- fin search bar -->
</body>
</html>