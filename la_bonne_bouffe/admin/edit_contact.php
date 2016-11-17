<?php

session_start();

require_once '../inc/connect.php';

//Si l'utilisateur connecté est un administrateur, alors on lui affiche la liste des messages
if($_SESSION['permission'] === 2){

	//Récupération des mails
	$select = $bdd->prepare('SELECT * FROM lbb_users');
	if($select->execute()){
		$messages = $select->fetchAll(PDO::FETCH_ASSOC);
	}else{
		var_dump($select->errorInfo());
	}

	if($messages['is_read'] === 0){
		$start_strong = '<strong>';
		$end_strong = '</strong>';
	}else{
		$start_strong = '';
		$end_strong = '';
	}

}else{
	//Si l'utilisateur est un éditeur, alors on le redirige vers la liste des recettes
	/*header('Location: ../list_recipes.php');
	die();*/
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editer les coordonnées et le slider</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php include 'header.php'; ?>

<h1 class="text-center text-info">Liste des messages</h1>

	<!-- Formulaire permettant d'éditer le header -->
	<div class="col-sm-6 col-sm-push-3">
		<table class="table">
			<thead>
				<tr>
					<th class="text-center">Prénom</th>
					<th class="text-center">Nom</th>
					<th class="text-center">Email</th>
					<th class="text-center">Message</th>
					<th class="text-center">Lu</th>
					<th class="text-center">Supprimer</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					if(!empty($messages)){
						foreach ($messages as $message) {
							echo $start_strong;
								echo '<tr>';
									echo '<td class="text-center">'.$message['firstname'].'</td>';
									echo '<td class="text-center">'.$message['lastname'].'</td>';
									echo '<td class="text-center">'.$message['email'].'</td>';
									echo '<td class="text-center">'.substr($message['message'], 0, 10).'</td>';
									echo '<td class="text-center"><span class="glyphicon glyphicon-ok alert alert-success"></span></td>';
									echo '<td class="text-center"><span class="glyphicon glyphicon-remove alert alert-danger"></span></td>';
								echo '</tr>';
							echo $end_strong;		
						}
					}else{
						echo '<p class="alert alert-danger">Aucun message</p>';
					}
				?>	
			</tbody>
		</table>
	</div>
</body>
</html>