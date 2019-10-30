<?php
//Herencia
class User extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM usuario INNER JOIN rol ON usuario.id_rol = rol.id_rol INNER JOIN tipo_ident ON usuario.id_tipo = tipo_ident.id_tipo");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function find_user($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM usuario INNER JOIN rol ON usuario.id_rol = rol.id_rol WHERE id_usuario = ? ");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO usuario (id_tipo, documento, nombres, apellidos, ciudad, direccion, pass, url_image, id_rol) VALUES (?,?,?,?,?,?,?,?,3)");
            $result->bindParam(1, $data['id_tipo'], PDO::PARAM_INT);
            $result->bindParam(2, $data['documento'], PDO::PARAM_INT);
            $result->bindParam(3, $data['nombres'], PDO::PARAM_STR);
            $result->bindParam(4, $data['apellidos'], PDO::PARAM_STR);
            $result->bindParam(5, $data['ciudad'], PDO::PARAM_STR);
            $result->bindParam(6, $data['direccion'], PDO::PARAM_STR);
            $result->bindParam(7, $data['pass'], PDO::PARAM_STR);
            $result->bindParam(8, $data['url_image'], PDO::PARAM_STR);
            
            return $result->execute();
        }catch (Exception $e){
           die("Error User->register() " . $e->getMessage());
        }
    }



   public function register_doctor($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO usuario (id_tipo, documento, nombres, apellidos, ciudad, direccion, pass, url_image, id_rol) VALUES (?,?,?,?,?,?,?,?,2)");
            $result->bindParam(1, $data['id_tipo'], PDO::PARAM_INT);
            $result->bindParam(2, $data['documento'], PDO::PARAM_INT);
            $result->bindParam(3, $data['nombres'], PDO::PARAM_STR);
            $result->bindParam(4, $data['apellidos'], PDO::PARAM_STR);
            $result->bindParam(5, $data['ciudad'], PDO::PARAM_STR);
            $result->bindParam(6, $data['direccion'], PDO::PARAM_STR);
            $result->bindParam(7, $data['pass'], PDO::PARAM_STR);
            $result->bindParam(8, $data['url_image'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error User->register_doctor() " . $e->getMessage());
        }
    }





    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE usuario SET documento = ?, nombres = ?, apellidos = ?, ciudad = ?, direccion = ?, url_image = ? WHERE id_usuario = ?");
            $result->bindParam(1, $data['documento'], PDO::PARAM_INT);
            $result->bindParam(2, $data['nombres'], PDO::PARAM_STR);
            $result->bindParam(3, $data['apellidos'], PDO::PARAM_STR);
            $result->bindParam(4, $data['ciudad'], PDO::PARAM_STR);
            $result->bindParam(5, $data['direccion'], PDO::PARAM_STR);
            $result->bindParam(6, $data['url_image'], PDO::PARAM_STR);
            $result->bindParam(7, $data['id_usuario'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error User->update_register() " . $e->getMessage());
        }

    }

     public function deleteUsuario ($data){
        try{
            $SQL = 'DELETE FROM usuario WHERE id_usuario= ?';
            $result = parent::connect()->prepare($SQL);
            $result->execute(array($data));
            $variable = ( $result )?   header('location:?controller=User&method=usuarios') : 'no eliminado' ;          
            echo $variable;

        }catch(Exception $m){
            die('Error Eliminar user->deleteUsuario '.$m->getMessage());
        }finally{
            $result = null;
        }

    }


}
?>
