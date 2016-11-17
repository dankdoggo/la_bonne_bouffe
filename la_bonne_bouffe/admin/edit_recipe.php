<?php
session_start();


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mettre à jour la Recette</title>
		 <!--Feuille de style Bootstrape-->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<?php include 'header.php'; ?>
		<main class="container">

			<h1 class="text-center text-info">Mettre à jour la Recette</h1>
			
			<div class="col-sm-6 col-sm-push-3">
				<form method="post">

					<label class="text-center text-info">Nom de la recette :</label><br>
					<input type="text" name="title" class="form-control" placeholder="Risoto"><br>


					<label  class="text-center text-info">Description :</label><br>	
					<textarea name="content" class="form-control" placeholder="La recette ici"></textarea><br>
					
					<label class="text-center text-info">Photo : </label><br>
					<input type="file" name="picture" class="input-file" accept="image/*"><br>

					<input type="submit" name="submit" class="btn btn-primary">





				</form>
			</div>
		</main>
	</body>
</html>