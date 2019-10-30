<?php

class citaController extends cita {

	
	public function __construct()
    {
        Security::verifyUser();
    }


	public function citas (){
	require_once 'views/layouts/body.php';
	require_once 'views/cita/index.php';
		
	}
	public function create(){
        
    require_once 'views/layouts/Html.php';
    require_once 'views/cita/create.php';

	}
	public function consult(){
    require_once 'views/layouts/Html.php';
	require_once 'views/cita/consult.php';
	}
	public function doctor(){
	require_once 'views/layouts/Doctor.php';
	require_once 'views/cita/doctor.php';
	}
	public function store(){
		echo parent::registrar_citas($_POST) ? header('location:?controller=user&method=vista') : 'Error al registrar citas';
	}
	
	public function consultind(){
	    $il = parent::find_citasind($_GET['usuario_id']);

		require_once 'views/layouts/Html.php';
		require_once 'views/user/usuarioind.php';
	
		}
	public function edit (){
    $cita = parent::find_citas($_GET['id_solicitud']);
    require_once 'views/layouts/body.php';
    require_once 'views/cita/edit.php';

	}


	public function update(){
    echo parent::update_citas($_POST) ? header('location:?controller=cita&method=citas') : 'Error en actualizar datos';
	}
	public function delete (){
    $cita = parent::delete_citas($_GET['id_solicitud']);
	}


}
?>