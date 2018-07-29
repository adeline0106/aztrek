<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$sejour = getSejour($id);


$utilisateur = current_user();

get_header($sejour["titre"]);
?>

<section class="container">
    <h1><?php echo $sejour["titre"]; ?></h1>

    

</section>

<?php get_footer(); ?>

