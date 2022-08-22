<?php

use App\Controller\UserController;

$users = new UserController();
$us = $users->showAll();

?>
<?php if(isset($_GET['error'])){ ?>
    <div class="alert alert-danger">
        Error! vous avez essayer de faire une opération interdit 
    </div>
<?php } ?>
<div class="row">
    <div class="col-md-12">
        <div class="clearfix mb-2">
            <h2>
                La list des Utilisateur
                <a type="button" href="<?= $router->generate('addUser') ?>" class="btn btn-outline-primary float-right">Ajouter</a>
            </h2> 
            
        </div>
    </div>
</div>
<table class="table"> 
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Utilisateur</th>
            <th>Mot de passe</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($us as $key => $user): ?>
        <tr>
            <td><?= ++$key ?></td>
            <td><?= $user->getUsername() ?></td>
            <td><?= $user->getPassword() ?></td>
            <td class="style-flex">
                <a href="<?= $router->generate('updateUser',['id'=>$user->getId()]) ?>"><i class="fa fa-edit"></i> Modifier</a>
                <form method="DELETE" action="<?= $router->generate('deleteUser',['id'=>$user->getId()]) ?>">
                    <input name="token" value="<?= md5('token'.$user->getId()) ?>" type="hidden">
                    <button class="style-a" type="submit"><i class="fa fa-trash"></i> Supprimer</button>
                </form>
            </td>

        </tr>
        <?php endforeach ?>
    </tbody>
</table>