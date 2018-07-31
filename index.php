<?php
require_once 'lib/functions.php';
require_once 'model/database.php';



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
               
                
            </div>
    </section>

    <section class="trip container">
      <h2>Dernières minutes</h2>

      <div class="trip-items">

        <div>
          <h3>Salvador</h3>
          <p>Tazumal</p>
          <div class="trip__img">
            <img src="uploads/d_dernieresmn_photo1.jpg" alt="Salvador, Tazumal">
            <a href="#" class="btn cta_trip">En savoir +</a>
            <p class="price">à partir de 1790€</p>
          </div>
        </div>

        <div>
          <h3>Guatemala</h3>
          <p>Découverte des volcans : Fuego</p>
          <div class="trip__img">
            <img src="uploads/d_dernieresmn_photo2.jpg" alt="Guatemala, Découverte des volcans : Fuego">
            <a href="#" class="btn cta_trip">En savoir +</a>
            <p class="price">à partir de 1950€</p>
          </div>
        </div>
      </div>
    </section>

    <section class="news">
      <h2>nouveautés</h2>
      <div class="owl-carousel">
        <article class="item container">
          <div class="item-infos">
            <a href="#">
              <h3>Guatemala</h3>
            </a>
            <p class="item_name">Découverte de la région du Sierra Las Minas </p>
            <p class="item_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quis praesentium, quasi labore itaque illo nam excepturi
              est eum eveniet aperiam aut ipsam libero veritatis ea consequatur doloremque exercitationem officia.Repellendus
              repellat quod quam nisi labore earum nesciunt cum!</p>
            <a href="#" class="btn">En savoir +</a>
          </div>
          <div class="item-img">
            <a href="#">
            <img src="uploads/b_slider_photo1.jpg" alt="Découverte de la région du Sierra Las Minas">
            </a>
          </div>
        </article>
        <article class="item container">
          <div class="item-infos">
            <a href="#">
              <h3>Guatemala</h3>
            </a>
            <p class="item_name">Découverte de la région du Sierra Las Minas </p>
            <p class="item_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quis praesentium, quasi labore itaque illo nam excepturi
              est eum eveniet aperiam aut ipsam libero veritatis ea consequatur doloremque exercitationem officia.Repellendus
              repellat quod quam nisi labore earum nesciunt cum!</p>
            <a href="#" class="btn">En savoir +</a>
          </div>
          <div class="item-img">
            <a href="#">
            <img src="uploads/b_slider_photo2.jpg" alt="Découverte de la région du Sierra Las Minas">
            </a>
          </div>
        </article>
        <article class="item container">
          <div class="item-infos">
            <a href="#">
              <h3>Guatemala</h3>
            </a>
            <p class="item_name">Découverte de la région du Sierra Las Minas </p>
            <p class="item_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quis praesentium, quasi labore itaque illo nam excepturi
              est eum eveniet aperiam aut ipsam libero veritatis ea consequatur doloremque exercitationem officia.Repellendus
              repellat quod quam nisi labore earum nesciunt cum!</p>
            <a href="#" class="btn">En savoir +</a>
          </div>
          <div class="item-img">
            <a href="#">
            <img src="uploads/b_slider_photo3.jpg" alt="Découverte de la région du Sierra Las Minas">
            </a>
          </div>
        </article>
        <article class="item container">
          <div class="item-infos">
            <a href="#">
              <h3>Guatemala</h3>
            </a>
            <p class="item_name">Découverte de la région du Sierra Las Minas </p>
            <p class="item_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quis praesentium, quasi labore itaque illo nam excepturi
              est eum eveniet aperiam aut ipsam libero veritatis ea consequatur doloremque exercitationem officia.Repellendus
              repellat quod quam nisi labore earum nesciunt cum!</p>
            <a href="#" class="btn">En savoir +</a>
          </div>
          <div class="item-img">
            <a href="#">
            <img src="uploads/b_slider_photo4.jpg" alt="Découverte de la région du Sierra Las Minas">
            </a>
          </div>
        </article>
        <article class="item container">
          <div class="item-infos">
            <a href="#">
              <h3>Guatemala</h3>
            </a>
            <p class="item_name">Découverte de la région du Sierra Las Minas </p>
            <p class="item_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quis praesentium, quasi labore itaque illo nam excepturi
              est eum eveniet aperiam aut ipsam libero veritatis ea consequatur doloremque exercitationem officia.Repellendus
              repellat quod quam nisi labore earum nesciunt cum!</p>
            <a href="#" class="btn">En savoir +</a>
          </div>
          <div class="item-img">
            <a href="#">
            <img src="uploads/b_slider_photo5.jpg" alt="Découverte de la région du Sierra Las Minas">
            </a>
          </div>
        </article>
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

        <article>
          <h3>Mexique</h3>
          <h4>Trésors du Yucatàn</h4>
          <img src="uploads/s/a_sejour1.jpg" alt="Trésors du Yucatàn">
          <p class="price">à partir de 1350€</p>
        </article>

        <article>
          <h3>Mexique</h3>
          <h4>Caminando Mexico</h4>
          <img src="uploads/a_sejour2.jpg" alt="Caminando Mexico">
          <p class="price">à partir de 1560€</p>
        </article>

        <article>
          <h3>Mexique</h3>
          <h4>Les volcans</h4>
          <img src="uploads/a_sejour3.jpg" alt="Les volcans">
          <p class="price">à partir de 1840€</p>
        </article>
      </div>

    </section>

<?php get_footer(); ?>

