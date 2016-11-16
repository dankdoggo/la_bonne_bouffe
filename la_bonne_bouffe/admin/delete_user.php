<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Supprimer un utilisateur</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
<body>
<?php include 'header.php'; ?>


	<main class="container">

		<h1 class="text-center text-info">
			<i class="fa fa-trash"></i> Supprimer un utilisateur
		</h1>


			<form method="post" class="pager">
				 <input type="button" onclick="history.back();" value="Annuler" class="btn btn-default">

				 <input type="submit" name="delete" value="Oui, je veux supprimer cet utilisateur" class="btn btn-success">
			</form>

	</main>

</body>
</html>
