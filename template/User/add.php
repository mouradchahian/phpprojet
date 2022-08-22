<?php

use App\Controller\UserController;
$pageTitle = "Ajouter un utilisateur";
$success = false;
$errors = [];
$user = null;
$url = $router->generate('addUser');
if(!empty($_POST)){
    $obj  = new UserController();
    $result = $obj->addUser();

    if(!is_object($result)){
        $errors = $result['errors'];
        $user = $result['user'];
    }else{
        $success = true;
        $obj->unsetAllData();
    }
}

?>

<h2>Ajouter un Utilisateur</h2>
<?php require dirname(__DIR__,1) . DIRECTORY_SEPARATOR .'Errors/errors.php'; ?>
<?php require 'form.php'; ?>