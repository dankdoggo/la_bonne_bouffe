<?php

require_once '../inc/connect.php';
require_once '../inc/functions.php';
require_once '../datas.php';

$errors = [];
$post = [];
$dirUpload = '../uploads';

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
                $errors[] = 'Erreur lors de l\'envoi de la première image';
            }
        }
        else {
            $errors[] = 'Le type de fichier de la première image est invalide. Uniquement jpg/jpeg/gif/png.'; 
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
                $errors[] = 'Erreur lors de l\'envoi de la deuxième image';
            }
        }
        else {
            $errors[] = 'Le type de fichier de la deuxième image est invalide. Uniquement jpg/jpeg/gif/png.'; 
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
                $errors[] = 'Erreur lors de l\'envoi de la troisième image';
            }
        }
        else {
            $errors[] = 'Le type de fichier de la troisième image est invalide. Uniquement jpg/jpeg/gif/png.'; 
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

    if (isset($errors) && count($errors) == 0) {

       // s'il n'y a pas d'erreur on peut insérer les données dans la base de données
       $insert = $bdd->prepare('INSERT INTO users (firstname, lastname, email, password, birthdate, picture) VALUES (:firstname_register, :lastname_register, :email_register, :password_register, :birthdate, :picture_register)');
       
       $insert->bindValue(':firstname_register', $post['firstname_register']); 
       $insert->bindValue(':lastname_register', $post['lastname_register']);
       $insert->bindValue(':email_register', $post['email_register']);
       $insert->bindValue(':password_register', password_hash($post['password_register'], PASSWORD_DEFAULT));
       $insert->bindValue(':birthdate', $post['birth_year'].'-'.$post['birth_month'].'-'.$post['birth_day']);
       $insert->bindValue(':picture_register', $dirUpload.$pictureName);

       if ($insert->execute()) {
           $registerValid = true;
       }
       else {
            var_dump($insert->errorInfo());
        }

   } // end of $errors == 0
   

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
<?php include 'header.php'; ?>

<h1 class="text-center text-info"> Editer le slider et les coordonnées</h1>

	<!-- Formulaire permettant d'éditer le header -->
	<div class="col-sm-6 col-sm-push-3">
		<h4 class="text-center text-danger">Veuillez uploader des images ne dépassant pas 250px </h4>
		<form method="post" enctype="multipart/form-data">
			<label for="slider1">Première image</label><br>
			<input type="file" name="slider1" id="slider1">

			<br>
			<label for="slider2">Deuxième image</label><br>
			<input type="file" name="slider2" id="slider2">

			<br>
			<label for="slider3">Troisième image</label><br>
			<input type="file" name="slider3" id="slider3">

			<br>
			<label for="address">Adresse postale</label><br>
			<input type="text" id="address" name="address" class="form-control">

			<br>
			<label for="zipcode">Code postal</label><br>
			<input type="text" id="zipcode" name="zipcode" class="form-control">

			<br>
			<label for="city">Ville</label><br>
			<input type="text" id="city" name="city" class="form-control">

			<br>
			<label for="phone">Téléphone</label><br>
			<input type="text" id="phone" name="phone" class="form-control">

			<br>
			<input type="submit" value="Editer" class="btn btn-primary">
			
		</form>
	</div>
</body>
</html>
