<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$nom = $_POST["nom"];

// Upload de l'image
if ($_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {
    $pays = getOneEntity("pays", $id);
    $image = $pays["image"];
    
} else {
    
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp, "../../../upload/". $image);
}


updatePays($id, $nom, $image);

header("Location: index.php");
