<?php

use App\Controller\UserController;
$pageTitle = "Modifier l'utilisateur";
$success = false;
$errors = [];
$id = $match['params']['id'];
$obj  = new UserController();
$user = $obj->show($id);
$url = $router->generate('updateUser',['id'=>$id]);
if(!empty($_POST)){
    $result = $obj->updateUser($id);
    if(!is_object($result)){
        $errors = $result['errors'];
    }else{
        $success = true;
    }
}
?>
<h2>Modifier l'utilisateur</h2>
<?php require dirname(__DIR__,1) . DIRECTORY_SEPARATOR .'Errors/errors.php'; ?>
<?php require 'form.php'; ?>
