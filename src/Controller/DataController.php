<?php
namespace App\Controller;

Abstract class DataController {

    protected $em ;

    public function __construct()
    {
        if(is_null($this->em)){

            $this->em = $GLOBALS['entityManager'];
            
        }
        
    }

    public function setData($entity,$data){
        $class = new \ReflectionClass($entity);
        $proporties  = $class->getProperties();
        foreach($proporties as $val){
                $name = $val->getName();
                if(array_key_exists($name,$data)){
                    $v = 'set'.ucfirst($name);
                    if (is_callable([$entity, $v])){
                        call_user_func([$entity, $v], $data[$name]);
                    }
                } 
        }
    }

    public function unsetAllData(){
        unset($_POST);
    }

    public function redirectToHome(bool $v = null){
        if($v === false){
            header('Location: /?error=1');
            exit();
        }else{
            header('Location: /');
            exit();
        }
        
    }
    
    
}