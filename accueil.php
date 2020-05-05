<?php
session_start();
require('connexion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<script type='text/javascript' src='assets/jquery.js'></script>	
		<!-- <link rel="stylesheet" id="style-css" href="assets/style.css" type="text/css"> -->
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	<title>Accueil</title>
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
		z-index: 1;
		
		}
	body, html{
		background-color: black;
		font-family: 'Bebas Neue', cursive;
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
	.car{
		margin-left: 375px;
		word-spacing: 10px;
	}
	.red{
		color:red;
	}
	</style>
<?php
if (!empty($_GET['p']) && $_GET['p']=="edit") 
{
	if (!empty($_GET['id'])) {
	
	$id= (int)$_GET['id'];
	$query = 'SELECT id, nom,serie_ou_film, thematique,image, image_mini,resume, trailer, date_format(date_creation,\'%d/%m/%Y \') as date_creation FROM series WHERE id= ?';
	
	$requete = $bdd->prepare($query);
	
	$requete->execute(array($id));
	$ligne= $requete->fetch();
	echo'<form method ="post">';
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
		echo '<div class="car"><h2 class ="red"> Résumé: </h2><h2>'.$ligne['resume'].'</div></h2>';
		echo '<div class="car"><h2 class ="red"> Trailer: </h2><h2> '.$ligne['trailer'].'</div></h2>';
		echo"<div class='product_action col-s car'>
					<button class='wishlist' product_name='Product 1' product_id='product1' product_price='90'>&#x2661; Ajouter à ma liste de souhait</button>
				</div>";
		echo'</div></form>';
		// if (!empty($_POST['wishlist'])) {
		// 	$wishlist = $_POST['wishlist'];
		// 	$up='UPDATE preferences SET wishlist = ? WHERE id_membre = ?';
		// 	$requete = $bdd->prepare($up);
		// 	$requete->execute(array($wishlist, $_SESSION['id']));
		// 	$_SESSION['wishlist']=$wishlist;
	

		// 			}
	}
	exit();
}
 ?>

	<div class="series">
<?php
	// $query = "SELECT count(id) as nbr, * FROM series WHERE id = {$_GET['id']}";
	$requete = $bdd->query("SELECT * FROM series");
		//avg(note) as notemoy	
	echo '<table border= "0">';

	$i = 0;
	while($ligne = $requete->fetch())
	{
		if($i==0){
			echo'<tr>';
		}

			echo '<td>
	  <a href="accueil.php?p=edit&id='.$ligne['id'].'">
	  <img class="mini" src="series/'.$ligne['image_mini'].'" /></a>
	  			</td>';
			$i++;
			if ($i== $_SESSION['grille']) {
				echo '</tr>';
				$i =0;
			}
		}
	echo'</table>';
	// $QUERY='SELECT * FROM avis';
	// $requete = $bdd->prepare($QUERY);
	// $requete->execute();
	// $ligne = $requete->fetch();
	// if ($ligne['note'] <=5)
	// {
	// 	echo'<img class="ind" src="note/une"/>';
	// }
	// if ($ligne['note'] <=10) {
	// 	echo'<img class="ind" src="note/deux"/>';
	// }
	// if($ligne['note']<=15){
	// 	echo'<img class="ind" src="note/trois"/>';
	// }
	// if($ligne['note']>=15){
	// 	echo'<img class="ind" src="note/quatre"/>';
	// }
	// echo $ligne['nbr'];
?>
<!-- </div> -->
<!-- Etoiles -->



<!-- <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span> -->
<!-- Fin étoiles -->
<style type="text/css">
	.checked 
	{
  color: orange;
	}
	.ind
	{
		transform: translateX(20px);
		transform: translateY(-1645px);

		z-index: 6;
		width: 75px;
		height:25px;
		
	}
	.Hello
	{
	font-size: 14px;
	color: #ff3333;
	}
	.mini:hover
	{
	border-radius: 3px;
	width: 150px;
	height: 150px;
	opacity: 0.5;
	transition: 0.35s;
	margin-left: 15px;
	margin-right: 15px;
	}

	li:hover
	{
	background-color: #ff3333;

	}
	img{
		border-radius: 15px;
	}

	/*wishlist*/
	.col-s{
	width:31%;
	float:left;
	margin:0px 4px;
}
button{
	text-align: center;
    text-transform: uppercase;
    padding: 8px 17px;
    border-radius: 4px;
    margin: 2px;
    border: none;
    background-color: #e96656;
    box-shadow: none;
    text-shadow: none;
    font-weight: 400;
    vertical-align: middle;
    cursor: pointer;
    white-space: nowrap;
    font-size: 13px;
    color: #FFF;	
}
#wish_list{
	position: fixed;
	bottom: 0px;
	right: 0px;
	height: 30px;
	width:300px;
	background: white;
	border:1px solid #e1e1e1;
}
#wish_list .wish_list_heading
{
    margin: 0px 0px;
    color: black;
    height: 30px;
    background-color: #607D8B;
    overflow: hidden;
    padding: 6px 3px;
    font-weight: bold;
    cursor: pointer;
}
/*fin wishlist*/
</style>
</div>
</body>
</html>