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
			<a href="#">Statistiques</a>
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


<h1 class="white">Mes Statistiques</h1>
<!-- <h1><a href="statistique.php?p=graph" style="color:black;">3D</a></h1> -->
<?php

	$requete = $bdd->query("SELECT t1.note as note, t1.id_serie as id_serie, t2.nom as nom FROM avis t1, series t2 WHERE t1.id_serie = t2.id");
 
?>
<h1 class="white"><a href="admin_stats.php?p=graph">3D</a></h1>
<?php 
$valid = "false";
if (!empty($_GET['p']) && $_GET['p']=="g") 
{
 $valid = "false";
}
 if (!empty($_GET['p']) && $_GET['p']=="graph") 
{
 $valid = "true";
}

	?> 
	<div id="piechart"></div>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
	// chargement google charts
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	// faire le chart et mettre les valeurs de chart 
	function drawChart() {
	
	  var data = google.visualization.arrayToDataTable([
	  	['Serie','note'],
      <?php  while($ligne = $requete->fetch()){
        	echo "['".$ligne["nom"]."',".$ligne["note"]."],";
        } ?>
    ]);

	  
	  // Optional; add a title and set the width and height of the chart
	  var options = {
	  	'title':'Séries les plus appréciées',
	  	'width':550,
	  	'height':400,
	  	'backgroundColor':'black',
	  	  legend: {textStyle: {color: 'white'}},
	  	  titleTextStyle: {
	  	  	color: 'white'
	  	  },
	  	  
          is3D: <?php echo $valid; ?> };

	  // Display the chart inside the <div> element with id="piechart"
	  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	  chart.draw(data, options);

	}
	</script>

	<style type="text/css">
		li:hover{
	background-color: #ff3333;

}

body,html{
	font-family: 'Bebas Neue', cursive;
	background-color: black;
}
.white{
	color: white;
}
	</style>

</body>
</html>