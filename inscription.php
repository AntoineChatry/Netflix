<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Netflix</title>
</head>
<body>
	
<!-- <table class="inscription">	 -->
	<form method="POST">
		
<!-- champ pseudo -->
	<!-- <tr> -->
		<!-- <td></td> -->
		<p>Votre pseudo:<!-- <td> --><input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo"required /></p>
		<!-- </td> -->
	<!-- </tr> -->
		<!-- champ email -->
		<!-- <tr> -->
			<!-- <td> -->
	<p>Votre e-mail:<!-- </td> --> 
	<!-- <td> --> <input type="email" name="email" id="email" placeholder="Votre email" required />	</p>
	<!-- </td>
		</tr> -->

		<!-- <tr>
			<td> -->
	 <p>mot de passe:
			<!-- </td> -->
	 <!-- <td> --> <input type="password" name="password" id="password" placeholder="Votre mot de passe" required></p>
	<!--  </td>
	</tr>
	
	<tr>
		<td> -->
	<p>Verifiez mot de passe: <!-- </td><td> --><input type="password" name="cpassword" id="verify" placeholder="Verifiez mot de passe" required><!-- </td> --></p>
	<!-- </tr>	

	<tr> -->
		<!-- <td> -->
	<input class="Inscrire" type="submit" name="formsend" id="formsend" value="S'inscrire">
	<br><!-- </td> <td></td>
	</tr>
	<tr>
		<td> -->
	<a href="index.php" class="connect">Connectez-vous</a><!-- </td><td></td> -->
<!-- </tr>
 -->
</form>
<!-- </table> -->
<?php
session_start();
require('connexion.php');
if (isset($_POST['formsend'])) {
	extract($_POST);
		if (!empty($_POST['password'])&& !empty($_POST['pseudo'])&& !empty($_POST['email']) 
		&& !empty($_POST['cpassword'])) {
		
		$password=htmlspecialchars($_POST['password']);
		$pseudo=htmlspecialchars($_POST['pseudo']);
		$cpassword=htmlspecialchars($_POST['cpassword']);
		$email=htmlspecialchars($_POST['email']);
		if ($password ==$cpassword) {
			$option =[
				'cost' => 12,
			];
			
			
			$password=sha1($password);
			$query='INSERT INTO membres(pseudo,email,password,secret) VALUES(?,?,?,?)';

			$requete= $bdd->prepare($query);
			$requete->execute(array($pseudo,$email,$password,''));
			$QUERY = 'INSERT INTO preferences(id_membre) VALUES(?)';
			$requete =  $bdd->prepare($QUERY);
			$requete->execute(array($id));
			header('location: index.php');

		}
	}if (empty($_POST['password'])) {
	echo "";
}if ($password!= $cpassword) {

	echo '<div class="motdepasse">Les mots de passe ne correspondent pas</div>';

}


}
?>



</body>
</html>