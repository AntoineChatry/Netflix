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
	<title>Accueil</title>
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
		<?php
	echo '<p class="Hello">Bonjour '.$_SESSION['pseudo'].'</p>';
	?>
		<font size="5">
		<li>
			<a href="accueil.php">Accueil</a>
		</li>
		<br>
		<li>
			<a href="">Mes Avis</a>
		</li>
		<br>
		<li>
			<a href="statistiques.php">Mes statistiques</a>
		</li>
		<br>
		<li>
			<a href="">Mes préférences</a>
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

	$QUERY = 'SELECT count(*) as nbr
			FROM avis t1, membres t2, series t3 
			WHERE t1.id_serie=t3.id and t1.id_membre=t2.id and t1.id_membre = ?';

	$QUERY = 'SELECT t2.pseudo as pseudo, t3.nom as nom, t1.note as note, date_format(t1.date_creation,\'%d/%m/%Y\') as date_creation, t3.image_mini as image, t1.id_serie as id 
			FROM avis t1, membres t2, series t3 
			WHERE t1.id_serie=t3.id and t1.id_membre=t2.id and t1.id_membre = ?
			ORDER BY t1.date_creation DESC
			LIMIT 0,10';
	
	$requete = $bdd->prepare($QUERY);
	
	$ligne = $requete->fetch();
	
	

?>
<h1>Mes Statistiques</h1>
<h1><a href="statistique.php" style="color:black;">2D</a></h1>
	<div id="piechart"></div>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
	// chargement google charts
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	// faire le chart et mettre les valeurs de chart 
	function drawChart() {
	
	  var data = google.visualization.arrayToDataTable([

	  ['Task', 'Hours per Day'],
	  ['Peaky Blinders',6],
	  ['Breaking Bad', 7],
	  ['Prison Break', 4],
	  ['Avatar', 2],
	  ['SouthPark', 8]
	  
	]);

	  // Optional; add a title and set the width and height of the chart
	  var options = {'title':'Séries les plus appréciées', 'width':550, 'height':400,'backgroundColor':'#4d4d4d', is3D: true,};

	  // Display the chart inside the <div> element with id="piechart"
	  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	  chart.draw(data, options);
	}
	</script>

</body>
</html>