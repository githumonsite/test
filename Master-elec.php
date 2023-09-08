<!DOCTYPE html>
<html>
<head>
	<title>Inscription </title>
	<meta charset="utf-8">

	<style type="text/css">
		#form{
			width: 25%;
			height: 450px;
			margin-left: 10%;
			padding: 2%;
			background-color: darkblue;
			color: white;
			border: solid orange 5px;
		}
		#form1{
			text-decoration: underline;
		}
		
	</style>
</head>
<body>
		<div id="form">
		<h1 id="form1">Formulaire  d'Inscription</h1><br><br>
        
		<form method="POST">
			<label>Nom : </label><input type="text" name="Nom" placeholder="Saisissez votre Nom" required size="40"><br><br><br>
			<label>Prenom : </label><input type="text" name="Prenom" placeholder="Saisissez votre Prenom" required size="37"><br><br><br>
			<label>Email : </label><input type="Email" name="Email" placeholder="Saisissez votre Email" required size="39"><br><br><br>
			<label>Password : </label><input type="Password" name="Password" placeholder="Saisissez votre Password" required size="35"><br><br><br>
			<label>RepPassword : </label><input type="Password" name="RepPassword" placeholder="Repeter votre Password" size="31"><br><br><br><br><br>

			<input type="submit" name="Inscription" value="Inscription">
		</form>
	</div>

		<?php 
				try { $db= new PDO ('mysql:host=localhost; dbname=master_elec', 'root', '');
					
				} catch (Exception $e) { die('Erreur de connexion:' .$e->getmessage());
					
				   }

					if (isset($_POST['Inscription'])) {
						$Nom= $_POST['Nom'];
						$Prenom= $_POST['Prenom'];
						$Email= $_POST['Email'];
						$Password= $_POST['Password'];
						$RepPassword= $_POST['RepPassword'];

					if ($Password== $RepPassword) {

						$p= $db ->prepare('SELECT Email FROM inscription_connexion_master_elec WHERE Email= :Email'); 
						$p-> execute(['Email'=> $Email]);
						$result= $p-> rowcount();

					if ($result== 0) {
						$q= $db-> prepare('INSERT INTO inscription_connexion_master_elec(Nom, Prenom, Email, Password) values(:Nom, :Prenom, :Email, :Password)');
						$q-> execute([
										'Nom' => $Nom,
										'Prenom' => $Prenom,
										'Email' => $Email,
										'Password' => $Password
									]);

								echo "Votre compte a ete cree avec succes.";

				} 
					else {
							echo "Ce compte existe déjà.";
						
					    }
					
					} else {
							echo "Vos Password ne sont pas identique.";}
				 }



		 ?>
	

	</body>
    </html>