<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$liste_pays = getAllEntities("pays");
$liste_sejours = getAllEntities("sejour");

get_header("Liste des pays");
?>

<section class="container">

    <h2>Nos destinations</h2>

    <div class="button-group filters-button-group">
        <?php foreach ($liste_pays as $pays) : ?>
            <button class="button" data-filter=".pays<?php echo $pays["id"]; ?>">
                <?php echo $pays["nom"]; ?></button>
                <img src="uploads/<?php echo $pays["image"]; ?>" alt="<?php echo $pays["nom"]; ?>">
        <?php endforeach; ?>
    </div>

    <div class="grid">
        <?php foreach ($liste_sejours as $sejour) : ?>
        <div class="element-item pays<?php echo $sejour["pays_id"]; ?>"><img src="uploads/<?php echo $sejour["image"]; ?>" alt="<?php echo $sejour["titre"]; ?>">
            <h4><?php echo $sejour["titre"]; ?></h4>
        </div>
        <?php endforeach; ?>
    </div>


</section>

<?php get_footer(); ?>