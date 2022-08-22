<?php if(count($errors)): ?>
<div class="alert alert-danger">
    Error ! les informations sont invalide
</div>
<?php endif ?>
<?php if($success): ?>
<div class="alert alert-success">
    Bien ! les informations sont envoyées utilisateur, <?= $result->getUsername() ?> à bien ajoutées.
</div>
<?php endif ?>