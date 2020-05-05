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
	<title>Mes avis</title>
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


<?php 


 $QUERY= 'SELECT t2.pseudo as pseudo, t1.commentaire as commentaire,t3.nom as nom, t2.id as id, t1.note as note , date_format(t1.date_creation,\'%d/%m/%Y à %H:%i\') as date_creation, t3.image_mini as image_mini FROM avis t1, membres t2, series t3 WHERE t1.id_serie = t3.id AND t1.id_membre = t2.id AND t2.id = ? ';

 	$requete= $bdd->prepare($QUERY);
 	$requete->execute(array($_SESSION['id']));
	
	//On ramène le résultat
	//On gère les lignes retournées de la Requête dans une boucle WHILE
	while($ligne = $requete->fetch())
	{

		echo'<div class="bulle" id="desc">';
		//Affichage de la table avec les valeurs des champs retournés
		echo '<p class="bu"> Le: '.$ligne['date_creation'].'&nbsp; <br>'.$ligne['nom'].'&nbsp; <br>'.$ligne['pseudo'].':&nbsp;'.$ligne['commentaire'].'&nbsp; &nbsp; Note: &nbsp;'.$ligne['note'].'</p>';
		echo'</div>';
	}

?>
<!-- <h3><a href="avis.php?p=avis&id=?">Ecrire un avis</a></h3> -->
<!-- <?php 
// if (!empty($_GET['p']) && $_GET['p']=="avis") 
// {
// 	if (!empty($_GET['id'])) {
	
// 	$id= (int)$_GET['id'];
// 	$query = 'SELECT * FROM avis WHERE id= ?';
	
// 	$requete = $bdd->prepare($query);
	
// 	$requete->execute(array($id));
// 	$ligne= $requete->fetch();
// 	echo '<div class="color">';
// 	echo '<div><img class ="size" src="series/'.$ligne['image'].'"></div>';
// 	echo '<div class="car"><h2 class ="red">Note: </h2><textarea> '.$ligne['note'].'</div></textarea>';
// 	echo '<div class="car"><h2 class="red"> Thématique: </h2><h2>'.$ligne['thematique'].'</div></h2>';

// 	}
// 	exit();
// }
?>
-->

<style type="text/css">
	body, html{
		background-color: black;
	}
	body>#menu
	{
  position:fixed;

	}
	.bu{
		/*transform: translateY(-20px);*/
		color: <?php echo $_SESSION['couleur_texte'];?>;
		text-align: center;
		font-size: <?php echo $_SESSION['FONT'].'px';?>;
	}
	.avis{
		color:white;
		text-align: center;
		transform: translateY(25px);
	}
	h3{
		color: white;
		text-align: right;
	}
	/*00b300*/
	.bulle{
		border-radius: 32px;
		width: 250px;
		/*height: 78px;*/
		background-color: <?php echo $_SESSION['couleur_avis']; ?>;
		transform: translateY(30px);
		margin-left: 275px;
	}
	.Hello{
	font-size: 14px;
	color: #ff3333;
}
li:hover{
	background-color: #ff3333;

}
body,html{
	font-family: 'Bebas Neue', cursive;
}


</style>

<script type="text/javascript">

var Point = function( x,y )
{

	this.x = x||0;
	this.y = y||0;

	this.set = function( from ){ this.x = from.x; this.y = from.y; return this; };
	this.add = function( other ){   this.x += other.x; this.y += other.y; return this; };
	this.subtract = function( other ){   this.x -= other.x; this.y -= other.y; return this; };
	this.length = function(){   return Math.sqrt( this.x * this.x + this.y * this.y ); };
	this.normalize = function( length ){ length = length||0; var div = ( 1 / this.length() ) * length; this.x *= div; this.y *= div; return this; };

};
Point.add = function( a,b ){ return new Point().set( a ).add( b ); };
Point.subtract = function( a,b ){ return new Point().set( a ).subtract( b ); };

function project( p, a, b )
{
	var tmp = new Point().set( a ).subtract( b );
	var len = tmp.length();
	var r = ( ( ( a.y - p.y ) * ( a.y - b.y ) ) - ( ( a.x - p.x ) * ( b.x - a.x ) ) ) / ( len * len );

	if( r <= 0 )
	{
		tmp.set( a );
	}
	else if( r >= 1 )
	{
		tmp.set( b );
	}
	else
	{
		tmp.x = a.x + r * (b.x - a.x);
		tmp.y = a.y + r * (b.y - a.y);
	}
	return tmp;
}


var JellyPoint = function( x,y, radius, elasticity, viscosity, damping )
{

	this.x = x||0;
	this.y = y||0;

	this.radius = radius || 50;
	this.elasticity = elasticity || 10;
	this.viscosity = viscosity || 0.25;
	this.damping = damping || 0.1;

	this.origin = new Point( this.x,this.y );
	this.delta = new Point( 0,0 );
	this.offset = new Point( 0,0 );

	this.fixed = false;

};

JellyPoint.prototype =
{
	update : function( mouse )
	{
		if( mouse == null ) return;

		if( this.fixed )
		{
			this.x = this.origin.x;
			this.y = this.origin.y;
			return;
		}

	    this.offset.x += ( this.origin.x - this.x ) / this.elasticity;
	    this.offset.y += ( this.origin.y - this.y ) / this.elasticity;

		this.delta.set( this).subtract( mouse );

		if ( this.delta.length() <= this.radius )
	    {
	        var a = Math.atan2( this.delta.y, this.delta.x);
			this.offset.x += ( Math.cos( a ) * this.radius - this.delta.x ) * ( 1 - this.damping );
	        this.offset.y += ( Math.sin( a ) * this.radius - this.delta.y ) * ( 1 - this.damping );
	    }

	    this.offset.x *= ( 1 - this.viscosity );
	    this.offset.y *= ( 1 - this.viscosity );

	    if ( Math.abs( this.offset.x ) < .001)
	    {
	        this.offset.x = 0;
	    }

	    if ( Math.abs( this.offset.y ) < .001)
	    {
	        this.offset.y = 0;
	    }

	    this.x += this.offset.x;
	    this.y += this.offset.y;

	},

	render : function( ctx )
	{

		ctx.strokeStyle = "#CCC";
		ctx.lineWidth = 1;
		ctx.beginPath();
		ctx.arc( this.x, this.y, this.radius, 0, Math.PI * 2 );
		ctx.stroke();

		ctx.fillStyle = "#09C";
		ctx.lineWidth = 0;
		ctx.beginPath();
		ctx.arc( this.origin.x, this.origin.y, 8, 0, Math.PI * 2 );
		ctx.fill();

		ctx.fillStyle = "#fC0";
		ctx.lineWidth = 0;
		ctx.beginPath();
		ctx.arc( this.x, this.y, 4, 0, Math.PI * 2 );
		ctx.fill();

	}
};



function renderPath( ctx, points, closePath, radius )
{
	ctx.strokeStyle = "#ccc";
	ctx.lineWidth = 5;
	ctx.beginPath();

	var count, i, n, p0, p1, p2, pp0, pp2, last, v0, v2, r;

	count = points.length;

	last = new Point();
	pp0 = new Point();
	pp2 = new Point();

	v0 = new Point();
	v2 = new Point();

    p0 = points[ 0 ];
    p1 = points[ 1 ];

    if ( !closePath )
    {
        ctx.moveTo( p0.x, p0.y );
        last.set( points[ count - 1 ] );
    }

    n = ( closePath ) ? count + 1 : count - 1;

    for(  i = 1; i < n; i++ )
    {
        p2 = points[ ( i + 1 ) % count ];

        v0.set( p0 ).subtract( p1 );
        v2.set( p2 ).subtract( p1 );

        r = Math.max( 1, Math.min( radius, Math.min( v0.length() / 2, v2.length() / 2 ) ) );

        v0.normalize( r );
        v2.normalize( r );

        pp0.set( p1 ).add( v0 );
        pp2.set( p1 ).add( v2 );

        if( i == 1 && closePath )
        {
            ctx.moveTo( pp0.x, pp0.y );
            last.set( pp0 );
        }
        else
        {
	        ctx.lineTo( pp0.x, pp0.y );
        }

        ctx.quadraticCurveTo( p1.x, p1.y, pp2.x, pp2.y );
        p0 = p1;
        p1 = p2;

    }
    ctx.lineTo( last.x, last.y);
	ctx.stroke();

}


var Spring = function( p0,p1,length )
{

	this.p0 = p0;
	this.p1 = p1;

	this.temp = new point();
	this.damping = 0.001;
	this.restLength = length;

	this.applyConstraints = function()
	{

		this.temp = this.temp.copy( this.p0 ).sub( this.p1 );
		this.temp.multiply( 1 - this.restLength / this.temp.length() ).multiply( 0.5).multiply( this.damping );

		if( !this.p0.fixed ) p0.sub( this.temp );
		if( !this.p1.fixed ) p1.add( this.temp );

	};
	this.render = function( ctx )
	{
		ctx.beginPath();
		ctx.moveTo( this.p0.x, this.p0.y );
		ctx.lineTo( this.p1.x, this.p1.y );
		ctx.arc( this.p0.x, this.p0.y, 5, 0, Math.PI * 2 );
		ctx.arc( this.p1.x, this.p1.y, 5, 0, Math.PI * 2 );
		ctx.stroke();
	};

}

///////////////////////////////////////////////////////////

var c, ctx, mouse, isDown;
var gui = new dat.GUI();

//SETUP

c = document.createElement( "canvas");
c.width = window.innerWidth;
c.height = window.innerHeight;
document.body.appendChild( c );
ctx = c.getContext( "2d" );

//HANDLERS

window.onmousedown = onMouseDown;
window.onmouseup = onMouseUp;
window.onmousemove = onMouseMove;
function onMouseDown( e ){ isDown = true; e.preventDefault(); }
function onMouseUp( e ){isDown = false; e.preventDefault(); }
function onMouseMove( e ){ mouse.x = e.clientX; mouse.y = e.clientY; }

//GUI

var conf =
{
	title : 'jelly belly',
	elasticity : 15,
	viscosity : 0.4,
	damping : 0.4,
	radius : 150,
	renderPoints : true,
	renderPath : true,
	closePath : true
};

gui.add( conf, 'title');
gui.add( conf, 'elasticity', 0.1, 50 );
gui.add( conf, 'viscosity', 0.01, 0.99 );
gui.add( conf, 'damping', 0.01, 0.99 );
gui.add( conf, 'radius', 10, 500 );
gui.add( conf, 'renderPoints' );
gui.add( conf, 'renderPath' );
gui.add( conf, 'closePath' );

//INIT

var points = [];
var springs = [];
var pathes = [];

var size = 150;
var jp0 = new JellyPoint( c.width / 2   -   size * 2, c.height / 2  -   size, conf.radius, conf.elasticity, conf.viscosity, conf.damping );
var jp1 = new JellyPoint( c.width / 2   +   size * 2, c.height / 2  -   size, conf.radius, conf.elasticity, conf.viscosity, conf.damping );
var jp2 = new JellyPoint( c.width / 2   +   size * 2, c.height / 2  +   size, conf.radius, conf.elasticity, conf.viscosity, conf.damping );
var jp3 = new JellyPoint( c.width / 2   -   size * 2, c.height / 2  +   size, conf.radius, conf.elasticity, conf.viscosity, conf.damping );

var pp0  = new JellyPoint( c.width / 2, c.height / 2, conf.radius, conf.elasticity, conf.viscosity, conf.damping );
var pp1  = new JellyPoint( c.width / 2, c.height / 2, conf.radius, conf.elasticity, conf.viscosity, conf.damping );
var pp2  = new JellyPoint( c.width / 2, c.height / 2, conf.radius, conf.elasticity, conf.viscosity, conf.damping );
var pp3  = new JellyPoint( c.width / 2, c.height / 2, conf.radius, conf.elasticity, conf.viscosity, conf.damping );

points.push(    jp0, jp1, jp2, jp3,
				pp0, pp1, pp2, pp3 );

points.push(    jp0, jp1, jp2, jp3,
				pp0, pp1, pp2, pp3 );

var pathes =    [
					[
						jp0, pp0,
						jp1, pp1,
						jp2, pp2,
						jp3, pp3
					]
				];

//UPDATE LOOP
mouse = new Point();
mouse.x = jp0.x + size / 4;
mouse.y = jp0.y + size / 4;
function update()
{

	ctx.clearRect(0,0, c.width, c.height );

	if( mouse.x > jp0.origin.x
	&&	mouse.y > jp0.origin.y
	&&	mouse.x < jp2.origin.x
	&&	mouse.y < jp2.origin.y
	)
	{
		pp0.origin.set( project( mouse, jp0.origin, jp1.origin ) );
		pp1.origin.set( project( mouse, jp1.origin, jp2.origin ) );
		pp2.origin.set( project( mouse, jp2.origin, jp3.origin ) );
		pp3.origin.set( project( mouse, jp3.origin, jp0.origin ) );

	}
	else
	{
		pp0.origin.set( jp0.origin );
		pp1.origin.set( jp1.origin );
		pp2.origin.set( jp2.origin );
		pp3.origin.set( jp3.origin );

	}

	//update & render points
	points.forEach(

		function( jp )
		{
			//updates GUI values
			jp.elasticity = conf.elasticity;
			jp.viscosity = conf.viscosity;
			jp.damping = conf.damping;
			jp.radius = conf.radius;

			//updates the jelly points
			jp.update( mouse );

			//render
			if( conf.renderPoints )
			{
				jp.render( ctx );
			}
		}

	);


	//draw path

	if( conf.renderPath )
	{
		ctx.fillStyle = "rgba( 0,0,0, .15 )";
		for( var i =0; i < pathes.length; i++ )
		{
			var path = pathes[ i ];

			if( path.length < 2 ) continue;
			if( conf.closePath && path.length < 3 ) continue;

			renderPath( ctx, path, conf.closePath, conf.radius );

		}
		ctx.fill();
	}

}
setInterval( update, 1000 / 60 );
</script>

</body>
</html>