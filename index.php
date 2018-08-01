<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$liste_incontournables = getAllSejours(["incontournables" => true], 3);
$liste_nouveautes = getAllSejours([], 5);
$liste_dernieresmns = getAllSejours([], 2);

get_header("Accueil");

//if (!isset($_GET["id"])) {
//    header("Location: 404.php");
//}
?>

<section class="presentation">
    <h2>Aztrek</h2>
    <h3>Un nouveau monde à chaque pas</h3>
    <p>Découvrez l'Amérique Centrale autrement...</p>
    <p>Le voyage est notre profession, le trek, notre passion</p>
</section>

 
<section class="trip container">
    <h2>Dernières minutes</h2>

    <div class="trip-items">
    <?php foreach ($liste_dernieresmns as $dernieremn): ?>
        <div>
            <h3><?php echo $dernieremn["pays"]; ?></h3>
            <p><?php echo $dernieremn["titre"]; ?></p>
            <div class="trip__img">
                <img src="uploads/<?php echo $dernieremn["image"]; ?>" alt="<?php echo $dernieremn["titre"]; ?>">
                <a href="sejour.php?id=<?php echo $dernieremn["id"]; ?>" class="btn cta_trip">En savoir +</a>
                <p class="price">à partir de 1790€</p>
            </div>
        </div>
    <?php endforeach; ?>
        
    </div>
</section>

<section class="news">
    <h2>nouveautés</h2>
    <div class="owl-carousel">

        <?php foreach ($liste_nouveautes as $nouveaute): ?>
            <article class="item container">
                <div class="item-infos">
                        <h3><?php echo $nouveaute["pays"]; ?></h3>
                    
                    <p class="item_name"><?php echo $nouveaute["titre"]; ?></p>
                    <p class="item_desc"><?php echo $nouveaute["description_courte"]; ?></p>
                    <a class="btn" href="sejour.php?id=<?php echo $nouveaute["id"]; ?>">En savoir +</a>
                </div>
                <div class="item-img">
                    <a href="sejour.php?id=<?php echo $nouveaute["id"]; ?>">
                        <img src="uploads/<?php echo $nouveaute["image"]; ?>" alt="<?php echo $nouveaute["titre"]; ?>">
                    </a>
                </div>
            </article>
        <?php endforeach; ?>

    </div>
</section>

<section class="view container">
    <h2>Partagez votre aventure</h2>
    <div class="view__part1">
        <div>
            <p>Notez votre séjour</p>
            <p>Donnez-nous votre avis et partagez votre plus belle photo !</p>
        </div>

        <div class="cta__view">
            <a href="#" class="btn">Je partage</a>
            <p>L’album de vos vacances offert pour toute participation !</p>
        </div>
    </div>

    <div class="view__items">

        <div class="pointofview container">
            <h3>HONDURAS - Les perles du Honduras</h3>
            <p class="remarque">Note
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Hébergement
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Restauration
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Activités
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Guides & animateurs
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <img src="images/c_partage_photo1.jpg" alt="HONDURAS - Les perles du Honduras">

            <div class="like">
                <div>
                    <p class="like-1">Ce que j’ai aimé</p>
                    <p class="comments">Cras quis lectus lobortis, sagittis neque sed, venenatis mauris. Cras eget porttitor ante. </p>
                </div>
                <div>
                    <p class="like-1">Ce qui pourrait être amélioré</p>
                    <p class="comments">Cras quis lectus lobortis, sagittis neque sed, venenatis mauris. Cras eget porttitor ante.</p>
                </div>
            </div>
        </div>

        <div class="pointofview container">
            <h3>SALVADOR - El Tunco</h3>
            <p class="remarque">Note
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Hébergement
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Restauration
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Activités
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Guides & animateurs
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <img src="images/c_partage_photo2.jpg" alt="SALVADOR - El Tunco">

            <div class="like">
                <div>
                    <p class="like-1">Ce que j’ai aimé</p>
                    <p class="comments">Cras quis lectus lobortis, sagittis neque sed, venenatis mauris. Cras eget porttitor ante. </p>
                </div>

                <div>
                    <p class="like-1">Ce qui pourrait être amélioré</p>
                    <p class="comments">Cras quis lectus lobortis, sagittis neque sed, venenatis mauris. Cras eget porttitor ante.</p>
                </div>
            </div>

        </div>

        <div class="pointofview container">
            <h3>GUATEMALA - Au coeur du monde Mayas</h3>
            <p class="remarque">Note
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Hébergement
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Restauration
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Activités
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Guides & animateurs
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <img src="uploads/c_partage_photo3.jpg" alt="GUATEMALA - Au coeur du monde Mayas  ">

            <div class="like">
                <div>
                    <p class="like-1">Ce que j’ai aimé</p>
                    <p class="comments">Cras quis lectus lobortis, sagittis neque sed, venenatis mauris. Cras eget porttitor ante. </p>
                </div>

                <div>
                    <p class="like-1">Ce qui pourrait être amélioré</p>
                    <p class="comments">Cras quis lectus lobortis, sagittis neque sed, venenatis mauris. Cras eget porttitor ante.</p>
                </div>
            </div>

        </div>

        <div class="pointofview container">
            <h3>COSTA RICA - Ecotourisme tropical </h3>
            <p class="remarque">Note
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Hébergement
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Restauration
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Activités
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <p class="remarque__item">Guides & animateurs
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="far fa-circle"></i>
            </p>
            <img src="uploads/c_partage_photo4.jpg" alt="COSTA RICA - Ecotourisme tropical">

            <div class="like">
                <div>
                    <p class="like-1">Ce que j’ai aimé</p>
                    <p class="comments">Cras quis lectus lobortis, sagittis neque sed, venenatis mauris. Cras eget porttitor ante. </p>
                </div>

                <div>
                    <p class="like-1">Ce qui pourrait être amélioré</p>
                    <p class="comments">Cras quis lectus lobortis, sagittis neque sed, venenatis mauris. Cras eget porttitor ante.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="cta__view">
        <a href="#" class="btn">Voir + d'avis</a>
    </div>
</section>

<section class="inescapable container">
    <h2>Les incontournables</h2>

    <div class=inescapable__items>

            <?php foreach ($liste_incontournables as $incontournable): ?>
            <a href="sejour.php?id=<?php echo $incontournable["id"]; ?>">
                <article>
                    <h3><?php echo $incontournable["pays"]; ?></h3>
                    <h4><?php echo $incontournable["titre"]; ?></h4>
                    <img src="uploads/<?php echo $incontournable["image"]; ?>" alt="<?php echo $incontournable["titre"]; ?>">
                    <p class="price">à partir de 1350€</p>
                </article>
            </a>    
            <?php endforeach; ?>
    </div>
    
</section>

<?php get_footer(); ?>

