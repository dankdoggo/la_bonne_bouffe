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

        <nav>

            <div>LOGO</div>

            <ul>


                <?php if(empty($_SESSION)): ?>
         
                    <li><a class="navbar-brand text-left" href="my_profile.php">Mon Profil</a></li>
                    <li><a class="navbar-brand text-left" href="add_recipe.php">Ajouter une recette</a></li>
                    <li><a class="navbar-brand" href="index.php">Connexion</a></li>
                        
        
            		
        		
        		
        		<?php else: ?>
                  
              		<li> <a class="navbar-brand" href="add_user.php">Ajouter un utilisateur</a></li>
                    <li><a class="navbar-brand" href="list_users.php">Liste des utilisateurs</a></li>
                    <li><a class="navbar-brand" href="edit_header.php">&Eacute;dition page d'accueil</a></li>
                    <li><a class="navbar-brand" href="../list_recipes.php">Liste des recettes</a></li>
                    <li><a class="navbar-brand" href="">Déconnexion</a></li>
                    
            	<?php endif; ?>
            	
            </ul>



        </nav>

    </body>

</html>
    	
