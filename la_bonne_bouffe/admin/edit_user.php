

<!--  PROBLEME AVEC L UPLOAD ATTENDRE LA FIN DE ADD_USER -->








<?php

session_start();

require_once '../inc/connect.php';
require_once '../inc/functions.php';


$post = [];
$errors = [];
$mimeTypeAllow = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
$dirUpload = 'uploads/';

if(!empty($_POST)){
	$post = array_map('trim', array_map('strip_tags', $_POST)); 



	if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
		$errors[] = 'Votre email est invalide';
	}

	if(!empty($post['password'])){
		$updatePassword = true;
		if(!minAndMaxLength($post['password'], 6, 20)){
			$errors[] = 'Votre mot de passe doit comporter entre 6 et 20 caractères';
		}
	}


	if(is_uploaded_file($_FILES['avatar']['tmp_name']) && file_exists($_FILES['avatar']['tmp_name'])){
		$finfo = new finfo();
		$mimeType = $finfo->file($_FILES['avatar']['tmp_name'], FILEINFO_MIME_TYPE);
		
		if(in_array($mimeType, $mimeTypeAllow)){
			$avatarName = uniqid('avatar_');
			$avatarName.= '.'.pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);

			if(!is_dir($dirUpload)){
				mkdir($dirUpload, 0755);
			}


			if(!move_uploaded_file($_FILES['avatar']['tmp_name'], $dirUpload.$avatarName)){
				$errors[] = 'Erreur lors de l\'envoi de votre avatar';
			}
		}
		else{
			$errors[] = 'Le type de fichier est invalide. Uniquement jpg/gif/png.'; 
		}

		$updateAvatar = true;
	}

	if(count($errors) === 0){


		
		$update = $bdd->prepare('UPDATE lbb_users SET email = :email, password = : password, avatar = :avatar WHERE id = :id'); // requete SQl par ID
		
		$update->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
		$update->bindValue(':email', $post['email']);
		$update->bindValue(':password', password_hash($post['password'], PASSWORD_DEFAULT));
		$update->bindValue(':avatar', $dirUpload.$avatarName); 
	



		if($update->execute()){
			$formValid = true;
		}
		else {
			var_dump($update->errorInfo());
		}
	}

}
	if(isset($_SESSION['id']) && is_numeric($_SESSION['id'])){

	$select = $bdd->prepare('SELECT * FROM lbb_users WHERE id = :id');
	$select->bindValue(':id', $_SESSION['id'], PDO::PARAM_INT);
	if($select->execute()){
		$user = $select->fetch(PDO::FETCH_ASSOC);
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Modifier un compte utlisateur</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<?php include 'header.php'; ?>
		<header></header>

		<main>

		 	<div class="col-sm-6 col-sm-push-3">

				<h1 text-center text-info>Modifier un compte utlisateur</h1>

				<form method="post">
					
					
				
					<br><br>
					<label for="password">Mot de passe</label>
					<input type="password" name="password" id="password" value="<?php echo ($user['password']) ?>" class="form-control">

					<br><br>
					<label for="email">Email</label>
					<input type="text" name="email" id="email" value="<?php echo ($user['email']) ?>" class="form-control">

					<br><br>
					<label for="avatar">Avatar</label>
					<input type="file" name="avatar" id="avatar" class="input-file" value="<?php echo ($user['avatar']) ?>" accept="image/*">

					<br><br>
					<input type="submit" id="submit" value="editer les informations" class="btn btn-primary">

				</form>

			</div>

		</main>
		
		<footer></footer>

	</body>
</html>