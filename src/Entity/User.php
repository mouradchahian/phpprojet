<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User{
    /**
     * @ORM\Id @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     * @var int
     */
    private $id;

    /**
     * 
     * @ORM\Column(type="string")
     * @var string
     */
    private $username;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $password;

    /**
     * 
     * array of errors
     * 
     */
    private $errors;

    public function __construct()
    {

    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }
    
    public function getPassword(){

        return $this->password;  

    }

    public function setUsername($username):self
    {
        $this->username = $username;
        return $this;
    }
    
    public function setPassword($password):self
    {
        $this->password = $password;
        return $this;


    }

     /**
     * @PrePersist @PreUpdate
     * 
     */
    public function validate() : array
    {
        $this->errors = [];
        $this->usernameValidate();
        $this->passwordValidate();
        return $this->errors;

    }

    public function usernameValidate(){
        if(empty($this->username)){
            $this->addError('username','Ce champ est obligatoire');
        }else{
            if(!filter_var($this->username,FILTER_VALIDATE_EMAIL)){
                $this->addError('username','L\'email est de type invalid');
            }
        }
    }

    public function passwordValidate(){
        if(empty($this->password)){
            $this->addError('password','Ce champ est obligatoire');
        }else{
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/',$this->password)){
                $this->addError('password','Le mot de passe doit contenir au moins 6-12 caractère');
            }
        }
    }

    public function addError($key,$value){

        $this->errors[$key] = $value;

    }


}

