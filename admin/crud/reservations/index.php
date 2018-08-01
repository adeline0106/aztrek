<?php
require_once '../../../model/database.php';

$liste_reservations = getAllEntities("reservation");

require_once '../../layout/header.php';
?>

<h1>Gestion des réservations</h1>
<a href="insert_form.php" class="btn btn-primary">Ajouter</a> 
<hr>

<table class="table table-striped table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Nom du séjour</th>
            <th>Date du séjour</th>
            <th>Nombre de participants</th>
            <th>Validation</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_reservations as $reservation) : ?>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $reservation["nbre_participants"]; ?></td>
            <td><?php echo $reservation["valide"]; ?></td>
            <td class="col-actions">
                <form action="delete_query.php" method="post" class="form-delete">
                    <input type="hidden" name="id" value="<?php echo $reservation["id"]; ?>">
                    <button type="submit" class="btn btn-danger" title="Supprimer">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
                <a href="update_form.php?id=<?php echo $pays["id"]; ?>" class="btn btn-warning">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>