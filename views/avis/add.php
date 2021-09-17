<?php include(VIEWS . '_partials/header.php');




?>
<form action="<?= BASE_PATH . 'avis/commentaires' ?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <input type="hidden" name="id" value="<?php echo  $produit['id'] ?? 0; ?>">
        <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-2">Commentaire</label>
            <textarea name="descriptif" class="form-control" id="exampleTextarea" rows="3">Votre commentaire</textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-2">Note</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-2">Membre</label>
            <input name="stock" type="number" value="<?php echo $avis['utilisateur_id'] ?? ''; ?>" class="form-control" id="exampleInputPassword1" placeholder="Stock">
        </div>

        <button type="submit" class="btn btn-light mt-2 mb-5">Valider</button>
    </fieldset>
</form>