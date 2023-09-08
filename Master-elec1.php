<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<meta charset="utf-8">

	<style type="text/css">
		#form{
			width: 40%;
			height: 300px;
			margin-left: 10%;
			padding: 2%;
			background-color: darkblue;
			color: white;
			border: solid yellow 5px;
		}
		#form1{
			text-decoration: underline;
		}
		
	</style>

</head>
<body>
	<div id="form">
		<h1 id="form1" >Formulaire de Connexion</h1><br><br>
		
	
	

	<form method="POST">
		<label>Email : </label><input type="Email" name="Email" placeholder="Saisissez votre Email" required size="40"><br><br><br><br>
		<label>Password : </label><input type="Password" name="Password" placeholder="Saisissez votre Password" required size="36"><br><br><br><br><br>

		<input type="submit" name="Connexion" value="Connexion">
	</form>
	</div>

	<?php 
			try { $bd= new PDO ('mysql:host=localhost; dbname=master_elec', 'root', '');
				
			} catch (Exception $e) { die('Erreur de connexion:' .$e->getmessage());
				
			  } 
			  if (isset($_POST['Connexion'])) {
			  	$Email= $_POST['Email'];
			  	$Password= $_POST['Password'];

			  		$p=$bd ->prepare(' SELECT Email and Password FROM inscription_connexion_master_elec WHERE Email= :Email and Password= :Password');
			  		$p ->execute(['Email' =>$Email, 'Password' =>$Password]);
			  		$result=$p ->fetch();

			   if ($result==true) {
			   		echo "Connexion en cours...";
			   	
			   } else {
			   		echo "Ce compte n'existe pas.";
			   	
			   }
			  
			  	
			  }
			  








	 ?>

</body>
</html>