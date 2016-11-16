<?php
	//  Voir jc pour les affichage selonn permission
	$test = [

		'permission'=> 2,

	];

	?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Liste des utilisateur</title>
		 <!--Feuille de style Bootstrape-->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
	<?php include 'header.php'; ?>
		<main class="container">

			<h1 class="text-center text-info">Liste utilisateur</h1>
			
				<table class="table">
					<thead>
						<tr>
							<th class="text-center">Username</th>
							<th class="text-center">Permission</th>
							<th class="text-center">E-mail</th>
							<th class="text-center">action</th>
						<tr>
					</thead>

					<tbody>
						<tr>
							<td class="text-center">loulou</td>
							<td class="text-center"><?php if($test['permission'] === 1){
										echo 'éditeur';
									}
									
									else{
										echo 'admin';
									}

									?>
								</td>
							<td class="text-center">lou@boutin.fr</td>
							<td class="text-center">
								<a href="my_profile.php?id=<?=$user['id'];?>" class="text-success" title="Voir le profil de l'utilisateur">
								<i class="fa fa-user-circle-o"></i> Visualiser
								</a>
								&nbsp; - &nbsp;
								<?php if(empty($_SESSION)): ?>

								<a href="edit_user.php?id=<?=$user['id'];?>" title="Editer cet utilisateur">
									<i class="fa fa-edit"></i> Editer
								</a>
								&nbsp; - &nbsp;
								
								<a href="delete_user.php?id=<?=$user['id'];?>" class="text-danger" title="Supprimer cet utilisateur">
									<i class="fa fa-times"></i> Supprimer
								</a>
							<?php endif;?>
							</td>
						</tr>


					</tbody>
				</table>
		</main>
	</body>
</html>