<?php

session_start();

require_once '../inc/connect.php';
require_once '../inc/functions.php';


$errors = [];
$post = [];
$mimeTypeAllow = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
$dirUpload = '../uploads_slider';

if(!empty($_POST)) {

	foreach ($_POST as $key => $value) {
        $post[$key] = trim(strip_tags($value));
    }

     // Vérification upload of slider1 (l'admin n'est pas obligé de télécharger les 3 photos en même temps)
    if(is_uploaded_file($_FILES['slider1']['tmp_name']) || file_exists($_FILES['slider1']['tmp_name'])) {
     	
     	// vérification de l'upload et insertion de la photo pour slider 1
        $finfo = new finfo(); 
        $mimeType = $finfo->file($_FILES['slider1']['tmp_name'], FILEINFO_MIME_TYPE);
        
        if(in_array($mimeType, $mimeTypeAllow)) { // la variable $mimeTypeAllow est dans le fichier datas.php
            $pictureName = uniqid('picture_');
            $pictureName.= '.'.pathinfo($_FILES['slider1']['name'], PATHINFO_EXTENSION); // on stocke dans une var $pictureName unidid un point et les informations sur l'extension

            if(!is_dir($dirUpload)){ // is_dir vérifie si le dossier existe dans l'arborescence des dossiers
                mkdir($dirUpload, 0755); // s'il n'y a pas de dossier existant avec al fonction mk_dir on le crée, 0755 correspond aux droits d'utilisateur
            }

            if(!move_uploaded_file($_FILES['slider1']['tmp_name'], $dirUpload.$pictureName)){ //move uploaded file permet permet de télécharger le fichier
                $errors[] = 'Erreur lors de l\'envoi de image 1';
            }
        }
        else {
            $errors[] = 'Le type de fichier de image 1 est invalide. Uniquement jpg/jpeg/gif/png.'; 
        }
	}

	// Vérification upload of slider2 (l'admin n'est pas obligé de télécharger les 3 photos en même temps)
    if(is_uploaded_file($_FILES['slider2']['tmp_name']) || file_exists($_FILES['slider1']['tmp_name'])) {
     	
     	// vérification de l'upload et insertion de la photo pour slider 1
        $finfo = new finfo(); 
        $mimeType = $finfo->file($_FILES['slider2']['tmp_name'], FILEINFO_MIME_TYPE);
        
        if(in_array($mimeType, $mimeTypeAllow)) { // la variable $mimeTypeAllow est dans le fichier datas.php
            $pictureName = uniqid('picture_');
            $pictureName.= '.'.pathinfo($_FILES['slider2']['name'], PATHINFO_EXTENSION); // on stocke dans une var $pictureName unidid un point et les informations sur l'extension

            if(!is_dir($dirUpload)){ // is_dir vérifie si le dossier existe dans l'arborescence des dossiers
                mkdir($dirUpload, 0755); // s'il n'y a pas de dossier existant avec al fonction mk_dir on le crée, 0755 correspond aux droits d'utilisateur
            }

            if(!move_uploaded_file($_FILES['slider2']['tmp_name'], $dirUpload.$pictureName)){ //move uploaded file permet permet de télécharger le fichier
                $errors[] = 'Erreur lors de l\'envoi de image 2';
            }
        }
        else {
            $errors[] = 'Le type de fichier de image 2 est invalide. Uniquement jpg/jpeg/gif/png.'; 
        }
	}

	// Vérification upload of slider2 (l'admin n'est pas obligé de télécharger les 3 photos en même temps)
    if(is_uploaded_file($_FILES['slider3']['tmp_name']) || file_exists($_FILES['slider1']['tmp_name'])) {
     	
     	// vérification de l'upload et insertion de la photo pour slider 1
        $finfo = new finfo(); 
        $mimeType = $finfo->file($_FILES['slider3']['tmp_name'], FILEINFO_MIME_TYPE);
        
        if(in_array($mimeType, $mimeTypeAllow)) { // la variable $mimeTypeAllow est dans le fichier datas.php
            $pictureName = uniqid('picture_');
            $pictureName.= '.'.pathinfo($_FILES['slider3']['name'], PATHINFO_EXTENSION); // on stocke dans une var $pictureName unidid un point et les informations sur l'extension

            if(!is_dir($dirUpload)){ // is_dir vérifie si le dossier existe dans l'arborescence des dossiers
                mkdir($dirUpload, 0755); // s'il n'y a pas de dossier existant avec al fonction mk_dir on le crée, 0755 correspond aux droits d'utilisateur
            }

            if(!move_uploaded_file($_FILES['slider3']['tmp_name'], $dirUpload.$pictureName)){ //move uploaded file permet permet de télécharger le fichier
                $errors[] = 'Erreur lors de l\'envoi de image 3';
            }
        }
        else {
            $errors[] = 'Le type de fichier de image 3 est invalide. Uniquement jpg/jpeg/gif/png.'; 
        }
	}


    if(!minAndMaxLength($post['adress'], 4, 50)) {
    	$errors[] = 'L\'adresse doit comporter entre 4 et 50 caractères';
    }

    if(!is_numeric($post['zipcode']) && strlen($post['zipcode']) != 5) {
    	$errors[] = 'Le code postal doit comporter 5 chiffres';
    }

    if(!minAndMaxLength($post['city'], 3, 50)) {
    	$errors[] = 'Le nom de la ville doit comporter entre 3 et 50 caractères';
    }

    if(!is_numeric($post['phone']) && strlen($post['phone']) != 10) {
    	$errors[] = 'Le numéro de téléphone doit comporter 10 chiffres';
    }

   
   

} // end of if !empty $_POST




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editer les coordonnées et le slider</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php if (empty($_SESSION)){
        header('Location: index.php');
    } ?>
<?php include 'header.php'; ?>

<h1 class="text-center text-info"> Editer le slider et les coordonnées</h1>


	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

			<h2 style="font-size: 1.4em;">Edition des images défilantes de l'accueil</h2>

				<?php if(count($errors) > 0) : ?>

                        <div class="alert alert-danger">
                             <?php echo implode('<br>', $errors); ?>
                        </div>
                                              
                <?php endif; ?>

				<form method="post" enctype="multipart/form-data">
					<input type="hidden" name="action" value="formulaire_1">
					<label for="slider1">Image 1</label><br>
					<input type="file" name="slider1" id="slider1">

					<br>
					<label for="slider2">Image 2</label><br>
					<input type="file" name="slider2" id="slider2">

					<br>
					<label for="slider3">Image 3</label><br>
					<input type="file" name="slider3" id="slider3">

					<br>
					<p class="text-left text-danger">Veuillez uploader des images ne dépassant pas 250px </p>
					<input type="submit" value="Editer les images" class="btn btn-primary">
				</form>

			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<h2 style="font-size: 1.4em;">Images du slider</h2>	




        		<?php 
        			$checkImg = $bdd->prepare('SELECT value FROM lbb_edit_home WHERE data LIKE "slide%"'); 
                    if($checkImg->execute()):
                        $sliders = $checkImg->fetchAll(PDO::FETCH_ASSOC);
                        $nbSliders = empty($sliders);
                       // $nbSliders = count($sliders);

        			    if($nbSliders === false): 
                ?>
        					<div>
								<p class="text-center alert alert-danger">Vous n'avez pas encore téléchargé d'images </p>
							</div>
        				
                        <?php else : ?>

                            <div>
                                <p class="text-center">Ah ouias </p> <!-- ca ne amrche -->
                            </div>

        				<?php endif; ?> <!-- // faire un else -->

        			<?php endif; ?>

			</div>

		</div>	

		<hr>

	<h2 style="font-size: 1.4em;">Edition de l'adresse du restaurant et numéro de téléphone</h2>	

		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<form method="post">
				<input type="hidden" name="action" value="formulaire_2">

                <label for="name-resto">Nom du resto</label><br>
                <input type="text" id="name-resto" name="name-resto" class="form-control" placeholder="La bonne bouffe">

                <br>
				<label for="address">Adresse</label><br>
				<input type="text" id="address" name="address" class="form-control" placeholder="Rue de la Gastro">

				<br>
				<label for="zipcode">Code postal</label><br>
				<input type="text" id="zipcode" name="zipcode" class="form-control" placeholder="33124">

				<br>
				<label for="city">Ville</label><br>
				<input type="text" id="city" name="city" class="form-control" placeholder="Bègles">

				<br>
				<label for="phone">Téléphone</label><br>
				<input type="text" id="phone" name="phone" class="form-control" placeholder="0523141245">

				<br>
				<input type="submit" value="Editer l'adresse" class="btn btn-primary">
				
			</form>
			</div>
		</div>
	</div>
</body>
</html>
