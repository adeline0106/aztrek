<?php

require_once '../../security.php';
require_once '../../../model/database.php';


// Récupération des données du formulaire
$titre = $_POST["titre"];
$duree = $_POST["duree"];
$date_creation = $_POST["date_creation"];
$descritpion_longue = $_POST["description_longue"];
$description_courte = $_POST["description_courte"];
$categorie_id = $_POST["categorie_id"];

// Upload de l'image
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp, "../../images/". $image);

// Enregistrement en base de données
insertSejour($titre, $duree, $date_creation, $description_courte, $description_longue, $image, $categorie_id);

// Redirection vers la liste
header("Location: index.php");

