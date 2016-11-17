<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Les recettes des chefs</title>


	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Source+Sans+Pro" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="wrapper">

	<?php include_once 'inc/header.php'; ?>	

	<main>
		<section id="section-list-recipe">
			<h1 class="text-center title-section-list">Liste des recettes du chef</h1>
			
			<div class="contain-search-recipe">
				<form method="get" class="form-inline">
					<div class="input-group">
						<input type="text" id="search" name="search" class="form-control" placeholder="Rechercher une recette" value="">
							<span class="input-group-btn">
								<button class="btn btn-info" type="submit">
									<i class="fa fa-search"></i>
								</button>
							</span>
					</div>
				</form>
			</div>

			

			<div class="container">
				<div class="row">
					
						<a href="#" class="linkRecipe">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 contain-img-text-list-recipe">
							<div class="title-list-recipe">Coco choco roulé</div>
							<div class="contain-img-list-recipe">
								<img src="img/roule-coco-choco.jpg" alt="roule-coco-choco" class="img-list-recipe">
							</div>
						</div>
						</a>

						<a href="#">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 contain-img-text-list-recipe">
							<div class="title-list-recipe">Croziflette de ta grand mère</div>
							<div class="contain-img-list-recipe">
								<img src="img/croziflette.jpg" alt="croziflette" class="img-list-recipe">
							</div>
						</div>
						</a>

						<a href="#">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 contain-img-text-list-recipe">
							<div class="title-list-recipe">Détox Water</div>
							<div class="contain-img-list-recipe">
								<img src="img/lemon.jpg" alt="detox-water" class="img-list-recipe">
							</div>
						</div>
						</a>
					
						<a href="#">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 contain-img-text-list-recipe">
							<div class="title-list-recipe">Des bonnes migales</div>
							<div class="contain-img-list-recipe">
								<img src="img/migale.jpg" alt="migale" class="img-list-recipe">
							</div>
						</div>
						</a>

						<a href="#">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 contain-img-text-list-recipe">
							<div class="title-list-recipe">Du gâteau vert</div>
							<div class="contain-img-list-recipe">
								<img src="img/cake.jpg" alt="cake-vert" class="img-list-recipe">
							</div>
						</div>
						</a>

						<a href="#">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 contain-img-text-list-recipe">
							<div class="title-list-recipe">Sushis protéinés</div>
							<div class="contain-img-list-recipe">
								<img src="img/sushi.jpg" alt="sushi" class="img-list-recipe">
							</div>
						</div>
						</a>	
				</div>
			</div>

		</section>			
	</main>

	<?php include_once 'inc/footer.php'; ?>

	</div> <!-- end of div wrapper -->
</body>
</html>