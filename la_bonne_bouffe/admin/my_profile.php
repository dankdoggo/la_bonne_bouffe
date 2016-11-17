<?php

session_start();

require_once '../inc/connect.php';

if(isset($_GET['id']) && is_numeric($_GET['id'])){

	$select = $bdd->prepare('SELECT * FROM lbb_users WHERE id = :id');
	$select->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
	if($select->execute()){
		$user = $select->fetch(PDO::FETCH_ASSOC);
	}
}
?>
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
						<strong>pseudo :</strong><?php echo($user['username']) ?>
					</li>
					<li>
						<strong>email :</strong><?php echo($user['email']) ?>
					</li>
					<li>
						<strong>avatar :</strong><?php echo($user['avatar']) ?>
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