<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Connexion</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<?php include 'header.php'; ?>

	<!-- Formulaire de connexion -->
	<div class="col-sm-6 col-sm-push-3">
		<h1 class="text-center text-info">Se connecter</h1>
		<form method="post">
			<label for="username">Nom d'utilisateur</label><br>
			<input type="text" name="username" id="username" class="form-control">

			<br>
			<label for="password">Mot de passe</label><br>
			<input type="password" name="password" id="password" class="form-control">

			<br>
			<input type="submit" value="Se connecter" class="btn btn-primary">
		</form>
	</div>
</body>
</html>
