<?php

use App\Controller\UserController;

$id = $match['params']['id'];
$obj  = new UserController();
$obj->deleteUser($id);