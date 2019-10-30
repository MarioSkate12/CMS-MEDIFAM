<?php

class cita extends Database {

	public function all_citas (){
    try {
      $result = parent::connect()->prepare("SELECT * FROM solicitar_citas INNER JOIN identificacion ON solicitar_citas.tipo_id = identificacion.tipo_id INNER JOIN centro_salud ON solicitar_citas.id_centro = centro_salud.id_centro INNER JOIN especialidad ON solicitar_citas.id_especial = especialidad.id_especial");
      $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function find_citas($id){
    try {
            $result = parent::connect()->prepare("SELECT * FROM solicitar_citas INNER JOIN identificacion ON solicitar_citas.tipo_id = identificacion.tipo_id INNER JOIN centro_salud ON solicitar_citas.id_centro = centro_salud.id_centro INNER JOIN especialidad ON solicitar_citas.id_especial = especialidad.id_especial WHERE id_solicitud = ?");

            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function find_citasind(){
        try {
                $result = parent::connect()->prepare("SELECT * FROM solicitar_citas INNER JOIN identificacion ON solicitar_citas.tipo_id = identificacion.tipo_id INNER JOIN centro_salud ON solicitar_citas.id_centro = centro_salud.id_centro INNER JOIN especialidad ON solicitar_citas.id_especial = especialidad.id_especial WHERE usuario_id = ?");
                $result->bindParam(1, $_GET['usuario_id'], PDO::PARAM_INT);
                $result->execute();
                return $result->fetch();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

	
    public function registrar_citas($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO solicitar_citas (tipo_id, documento, Nombre, Apellido, fecha, Hora, id_centro, id_especial, usuario_id) VALUES (?,?,?,?,?,?,?,?,?)");
            $result->bindParam(1, $data['tipo_id'], PDO::PARAM_INT);
            $result->bindParam(2, $data['documento'], PDO::PARAM_INT);
            $result->bindParam(3, $data['Nombre'], PDO::PARAM_STR);
            $result->bindParam(4, $data['Apellido'], PDO::PARAM_STR);
            $result->bindParam(5, $data['fecha'], PDO::PARAM_STR);
            $result->bindParam(6, $data['Hora'], PDO::PARAM_STR);
            $result->bindParam(7, $data['id_centro'], PDO::PARAM_INT);
            $result->bindParam(8, $data['id_especial'], PDO::PARAM_INT);
            $result->bindParam(9, $data['id_usuario'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
           die("Error cita->registrar_citas() " . $e->getMessage());
        }
    }





	public function update_citas ($data){
    try {
       $result = parent::connect()->prepare("UPDATE solicitar_citas SET tipo_id = ? , documento = ?, Nombre = ?, Apellido = ?, fecha = ?, Hora = ?, id_centro = ?, id_especial = ? WHERE id_solicitud = ?");

        $result->bindParam(1, $data['tipo_id'], PDO::PARAM_INT);
        $result->bindParam(2, $data['documento'], PDO::PARAM_INT);
        $result->bindParam(3, $data['Nombre'], PDO::PARAM_STR);
        $result->bindParam(4, $data['Apellido'], PDO::PARAM_STR);
        $result->bindParam(5, $data['fecha'], PDO::PARAM_STR);
        $result->bindParam(6, $data['Hora'], PDO::PARAM_STR);
        $result->bindParam(7, $data['id_centro'], PDO::PARAM_INT);
        $result->bindParam(8, $data['id_especial'], PDO::PARAM_INT);
        $result->bindParam(9, $data['id_solicitud'], PDO::PARAM_INT);
        return $result->execute();
        }catch (Exception $e){
            die("Error cita->update_citas() " . $e->getMessage());
        }

    }


    public function delete_citas ($data){
        try{
            $SQL = 'DELETE FROM solicitar_citas WHERE id_solicitud= ?';
            $result = parent::connect()->prepare($SQL);
            $result->execute(array($data));
            $variable = ( $result )?   header('location:?controller=cita&method=citas') : 'no eliminado' ;          
            echo $variable;

        }catch(Exception $m){
            die('Error Eliminar cita->delete_citas '.$m->getMessage());
        }finally{
            $result = null;
        }

    }




}
?>