<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$liste_categories = getAllEntities("categorie");

get_header("Liste des catégories");
?>

<section class="container">
 

        <h3><?php foreach ($liste_categories as $categorie) : ?>
            <div>
                <a href="#"><?php echo $categorie["libelle"]; ?>
                </a>
            </div>
            <?php    endforeach; ?>
        </h3>
    </a>

</section>

<?php get_footer(); ?>

