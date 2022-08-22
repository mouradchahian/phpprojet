<?php

use App\Controller\UserController;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__,1) . DIRECTORY_SEPARATOR ."bootstrap.php";

class UserTest extends TestCase{
    public function testInsertUserWithoutParams(){
        $user = new UserController();
        $result = implode(',',array_keys($user->addUser())) ;
        $this->assertEquals('errors,user',$result);
        
    }

    public function testInsertUserWithCorrectParams(){
        $_POST['username'] = 'mourad@gmail.com';
        $_POST['password'] = 'mourad123';
        $user = new UserController();
        $result = get_class($user->addUser());

        $this->assertEquals(get_class(new User),$result);
        
    }
}