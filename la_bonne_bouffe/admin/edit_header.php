<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editer les coordonnées et le slider</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php include 'header.php'; ?>

<h1 class="text-center text-info"> Editer le slider et les coordonnées</h1>

	<!-- Formulaire permettant d'éditer le header -->
	<div class="col-sm-6 col-sm-push-3">
		<h4 class="text-center text-danger">Veuillez uploader des images ne dépassant pas 250px </h4>
		<form method="post" enctype="multipart/form-data">
			<label for="slider1">Première image</label><br>
			<input type="file" name="slider1" id="slider1">

			<br>
			<label for="slider2">Deuxième image</label><br>
			<input type="file" name="slider2" id="slider2">

			<br>
			<label for="slider3">Troisième image</label><br>
			<input type="file" name="slider3" id="slider3">

			<br>
			<label for="address">Adresse postale</label><br>
			<input type="text" id="address" name="address" class="form-control">

			<br>
			<label for="zipcode">Code postal</label><br>
			<input type="text" id="zipcode" name="zipcode" class="form-control">

			<br>
			<label for="city">Ville</label><br>
			<input type="text" id="city" name="city" class="form-control">

			<br>
			<label for="phone">Téléphone</label><br>
			<input type="text" id="phone" name="phone" class="form-control">

			<br>
			<input type="submit" value="Se connecter" class="btn btn-primary">
			
		</form>
	</div>
</body>
</html>
