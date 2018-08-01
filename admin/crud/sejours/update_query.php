<?php

require_once '../../security.php';
require_once '../../../model/database.php';


// Récupération des données du formulaire
$id = $_POST["id"];
$titre = $_POST["titre"];
$description_courte = $_POST["description_courte"];
$description_longue = $_POST ["description_longue"];
$categorie_id = $_POST["categorie_id"];
$pays_id = $_POST["pays_id"];
$incontournable= (isset($_POST["incontournable"])) ? 1 : 0;
$duree = $_POST["duree"];

// Upload de l'image
if ($_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {
    $sejour = getOneEntity("sejour", $id);
    $image = $sejour["image"];
    
} else {
    
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp, "../../../uploads/". $image);
}

// Enregistrement en base de données
updateSejour($id, $titre, $image, $duree, $description_courte, $description_longue, $categorie_id, $pays_id, $incontournable) ;

// Redirection vers la liste
header("Location: index.php");

