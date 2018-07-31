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
    
    
<article class="container">
        <img src="uploads/<?php echo $sejour["image"]; ?>" alt="<?php echo $sejour["titre"]; ?>">
       
                <div class="">
                    <i class=""></i>
                    <?php echo $sejour["description_courte"]; ?>
                </div>
        
</article>


    

</section>

<?php get_footer(); ?>

