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
       
        <div class="container">
            <h3>Détail du séjour :</h3>
            <p><?php echo $sejour["description_longue"]; ?></p>  
        </div>
        
        <div>
            
            <h3>Durée du séjour : <?php echo $sejour["duree"]; ?> jours</h3>
        </div>
        
        <h3>Détail des réservations</h3>
        <table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Dates</th>
            <th>Nombre de places disponibles</th>
            <th>Nombre de participants</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td class="col-actions">
                    <form action="" method="post" class="">
                        <input type="hidden" name="id" value="">
                        <button type="submit" class="btn btn-danger" title="Réserver">
                        </button>
                    </form>
                </td>
            </tr>
    </tbody>
</table>

<form action="insert_reservation.php" method="post">
    <div class="table table-striped table-bordered table-hover">
        <label for="input-libelle" class="col-sm-2 col-form-label">Date du séjour</label>
        <div class="col-sm-10">
            <input type="date" name="libelle" class="form-control" id="input-libelle" placeholder="">
        </div>
    </div>
    <div class="form-group row">
        <label for="input-libelle" class="col-sm-2 col-form-label">Nombre de places disponibles</label>
        <div class="col-sm-10">
            <input type="number" name="libelle" class="form-control" id="input-libelle" placeholder="">
        </div>
    </div>
    <div class="form-group row">
        <label for="input-libelle" class="col-sm-2 col-form-label">Nombre de participants</label>
        <div class="col-sm-10">
            <input type="number" name="libelle" class="form-control" id="input-libelle" placeholder="">
        </div>
    </div>
    <div>
            <input type="hidden" name="libelle" class="form-control" id="input-libelle" placeholder="">
    </div>
 
    <div>
            <input type="hidden" name="libelle" class="form-control" id="input-libelle" placeholder="">
    </div>
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Réserver
    </button>
</form>
        
</article>


    

</section>

<?php get_footer(); ?>

