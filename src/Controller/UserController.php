<?php

namespace App\Controller;

use App\Entity\User;

class UserController extends DataController{


    /*
    *
    *   return @User
    */
    public function addUser()
    {
       $user = new user();
       parent::setData($user,$_POST); 
       $errors = $user->validate();
       if(count($errors) > 0){
            return ['errors'=>$errors,'user'=>$user];
       }
       $this->em->persist($user);
       $this->em->flush();
       return $user;
    }


    /*
    *
    *   return @User
    */
    public function updateUser($id)
    {
       $user = $this->em->find(User::class, $id);
       parent::setData($user,$_POST); 
       $errors = $user->validate();
       if(count($errors) > 0){
            return ['errors'=>$errors];
       }
       $this->em->persist($user);
       $this->em->flush();
       return $user;
    }


    /*
    *
    *   return redirection
    */
    public function deleteUser($id)
    {
       if($id && $_GET['token']){
        $token = md5('token'.$id);
        if($token == $_GET['token']){
            $user = $this->em->find(User::class, $id);
            if($user){
                $this->em->remove($user);
                $this->em->flush();
            }
            parent::redirectToHome();
        }else{
            parent::redirectToHome(false);
        }
       }else{
        parent::redirectToHome(false);
       }
       
       
       
    }


    /*
    *
    *   return @User
    */
    public function show($id):User{
        return $this->em->find(User::class, $id);
    }

    /*
    *
    *   return @User[]
    */
    public function showAll(): array
    {
        return $this->em->getRepository(User::class)->findAll();
    }




     
}