<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST["nom"];
$image = $_POST["image"];

insertPays($nom, $image);

header("Location: index.php");

