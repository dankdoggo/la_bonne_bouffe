<?php


require_once '../inc/connect.php';
session_start();

?>

<!DOCTYPE html>
<html lang="fr">

    <head>

        <!-- My CSS -->
        <link href="css/styles.temp.css" rel="stylesheet">

    </head>

    <body>

        <nav class="navbar navbar-default">

            <div class="navbar-header wrapper-header-back">


            	<?php if(empty($_SESSION)): ?>
                    <div>
                		 <a class="navbar-brand text-left" href="my_profile.php">Mon Profil</a></li>
                		 <a class="navbar-brand text-left" href="add_recipe.php">Ajouter une recette</a>
                    </div>
                    <div class="menu-header-back">
                         <a class="navbar-brand" href="index.php">Connexion</a>
                        
                    </div>
            		
        		
        		
        		<?php else: ?>
                    <div>
              		      <a class="navbar-brand" href="add_user.php">Ajouter un utilisateur</a>
        			      <a class="navbar-brand" href="list_users.php">Liste des utilisateurs</a>
        			      <a class="navbar-brand" href="edit_header.php">&Eacute;dition page d'accueil</a>
            		      <a class="navbar-brand" href="../list_recipes.php">Liste des recettes</a>
            		      <a class="navbar-brand" href="">Déconnexion</a>
                    </div>
            	<?php endif; ?>
            	
            </div>


        </nav>

    </body>

</html>
    	
