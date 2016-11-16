<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mon profil</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<?php include 'header.php'; ?>
		<header></header>

		<main>

		 	<div class="col-sm-6 col-sm-push-3">

				<h1 class="text-center text-info">Mon profil</h1><br>

				<ul>
					<li>
						<strong>pseudo :</strong> <!-- ajouter le php  -->
					</li>
					<li>
						<strong>email :</strong> <!-- ajouter le php  -->
					</li>
					<li>
						<strong>avatar :</strong> <!-- ajouter le php  -->
					</li>
				</ul>

				<div>
				<a href="edit_user.php?id=<?=$user['id'];?>" title="Modifier vos informations" class="btn btn-info btn-block">
					<i class="fa fa-edit"></i>Modifier vos informations</a>
				</div>
			
			</div>

			

		</main>
		
		<footer></footer>

	</body>
</html>