<?php

class Security extends Database{

    public function validateLogin($documento){
        try{
            $result = parent::connect()->prepare("SELECT * FROM  usuario WHERE documento = ?");
            $result->bindParam(1, $documento, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch (Exception $e){
            die($e->getMessage());
        }
    }

    public static function verifyUser(){
        if(! isset($_SESSION['user'])) header('location:?method=login');
    }
//
    public function verifyRole($rol){
        if(! $rol == $_SESSION['user']['id_rol']) header('location:?method=login');
    }

}