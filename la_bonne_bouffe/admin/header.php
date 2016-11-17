<?php

// $_SESSION = [

// 	'permission' => 2

// ];

?>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    	<?php if(empty($_SESSION)): ?>
    		<a class="navbar-brand" href="index.php">Connnexion</a>
    	
    		<a class="navbar-brand" href="my_profile.php">Mon Profils</a></li>
    		<a class="navbar-brand" href="add_recipe.php">Ajouté une recette</a>
    		
		
		
		<?php else: ?>
      		<a class="navbar-brand" href="add_user.php">Ajouté un utilisateur</a>
			<a class="navbar-brand" href="list_users.php">Liste d'utilisateur</a>
			<a class="navbar-brand" href="edit_header.php">&Eacute;dition page d'accueil</a>
    		<a class="navbar-brand" href="../list_recipes.php">Liste des recette</a>
    		<a class="navbar-brand" href="">Déconnexion</a>
    	<?php endif; ?>

    	
    	

    </div>
  </div>
</nav>
	
