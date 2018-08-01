<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$liste_categories = getAllEntities("categorie");
$liste_sejours = getAllEntities("sejour");

get_header("Liste des catégories");
?>



<section class="container isotope">

    <h2>Nos thématiques</h2>

    <div class="button-group filters-button-group">
        <?php foreach ($liste_categories as $categorie) : ?>
            <button class="button_iso" data-filter=".categorie-<?php echo $categorie["id"]; ?>">
                <?php echo $categorie["libelle"]; ?></button>
        <?php endforeach; ?>
    </div>

     <div class="grid">
        <?php foreach ($liste_sejours as $sejour) : ?>

            <div class="element-item-iso categorie-<?php echo $sejour["categorie_id"]; ?>">
                <a href="sejour.php?id=<?php echo $sejour["id"]; ?>">
                    <img src="uploads/<?php echo $sejour["image"]; ?>" alt="<?php echo $sejour["titre"]; ?>">
                    <h4><?php echo $sejour["titre"]; ?></h4>
                </a>
                <p class="desc_courte_iso"><?php echo $sejour["description_courte"]; ?></p>
            </div>

        <?php endforeach; ?>
    </div>


</section>

