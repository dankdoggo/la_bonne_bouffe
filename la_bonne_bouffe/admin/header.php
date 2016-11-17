<?php


require_once '../inc/connect.php';


?>

<!DOCTYPE html>
<html lang="fr">

    <head>
    <meta charset="utf-8">
        <!--Icone FontAwesome CDN Bootstrape-->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous"> 

        <!--CDN Normalize-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css" rel="stylesheet">


        <!-- My CSS -->
        <link href="../css/styles.css" rel="stylesheet">
    </head>

    <body>

        <nav class="wrapper-header-back">

            <div id="logo">LOGO</div>

            <div class="menu-header-back">
                <ul>


                  
             
                        <a href="my_profile.php"><li>MON PROFIL</li></a>
                        
                        
                        

                    <?php if(isset($_SESSION['permission']) && $_SESSION['permission'] == 2): ?> 
                        <a href="add_user.php"><li>AJOUTER UN UTILISATEUR</li></a>
                        <a href="list_users.php"><li>LISTE DES UTILISATEURS</li></a>
                        <a href="edit_header.php"><li>EDITER SLIDER</li></a>
                    <?php endif; ?>
                    <?php if(!empty($_SESSION)): ?>
                        <a href="add_recipe.php"><li>AJOUTER UNE RECETTE<li></a>
                        <a href="list_recipe.php"><li>LISTE RECETTE</li></a>
                        <a href=""><li><i class="fa fa-user-times"></i> SE DECONNECTER</li></a> 
                    <?php else: ?> 
                        <a href="index.php"><li><i class="fa fa-user"></i> SE CONNECTER</li></a>
                       
                       
                    <?php endif; ?>

                        
                	
                	
                </ul>
            </div>

        </nav>

    </body>

</html>
    	
