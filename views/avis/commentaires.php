<?php include(VIEWS . '_partials/header.php'); ?>

<a href="<?= BASE_PATH . 'avis/add'; ?>" class="btn btn-secondary mb-2 mt-2">Ajouter un commentaire</a>
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Commentaire</th>
            <th scope="col">Note</th>
            <th scope="col">Nom client</th>
            <th scope="col">Produit</th>
            <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($avis as $avis) : ?>
            <tr>
                <th scope="row"><?= $avis['id'] ?></th>
                <td><?= $avis['commentaire'] ?></td>
                <td><?= $avis['note'] ?></td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>