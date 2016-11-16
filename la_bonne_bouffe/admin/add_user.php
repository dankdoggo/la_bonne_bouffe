<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ajouter un utlisateur</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			
	</head>
	<body>
		
		<header></header>

		<main>

		 	<div class="col-sm-6 col-sm-push-3">

				<h1 class="text-center text-info">Ajout d'un utlisateur</h1>

				<form method="post">
					
					<label for="username">Pseudo</label>
					<input type="text" name="username" id="username" placeholder="" class="form-control">
				
					<br><br>
					<label for="password">Mot de passe</label>
					<input type="password" name="password" id="password" placeholder="" class="form-control">

					<br><br>
					<label for="email">Email</label>
					<input type="text" name="email" id="email" placeholder="" class="form-control">

					<br><br>
					<input type="submit" id="submit" value="Créer l'utilisateur" class="btn btn-primary">

				</form>

			</div>

		</main>
		
		<footer></footer>

	</body>
</html>