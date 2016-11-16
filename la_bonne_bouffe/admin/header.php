
	<div id=navbar>
		<ul id="links">
		<?php
		if(empty($_SESSION)){
			echo '<li><a href="index.php">Connexion</a></li>';
			echo '<li><a href="add_user.php">Join US!</a></li>';
	}	
		else{

			echo '<li><a href="logout.php">Deconnexion</a></li>';
	}
		?>
		
		<li><a href="list_users.php">Liste d'utilisateur</a></li>
		<li><a href="my_profile.php">Mon Profils</a></li>
		<li><a href="add_recipe.php">Ajouté une recette</a></li>
		
		</ul>


	</div>
