<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$sejours = getAllSejours();

get_header("Liste des séjours");
?>

<section class="container">
    <div class="">
        <?php foreach ($sejours as $sejour) : ?>
            <?php include 'include/sejour_inc.php'; ?>
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>



