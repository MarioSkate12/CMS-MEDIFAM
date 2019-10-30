<?php

class userController extends User {

	public function __construct()
    {
        Security::verifyUser();
    }


	public function index (){
	    require_once 'views/layouts/header.php';
		require_once 'views/user/create.php';
		
	}
	
	public function Doctores(){
		require_once 'views/layouts/body.php';
		require_once 'views/user/crear.php';
	}
	public function usuarios (){
	    require_once 'views/layouts/body.php';
		require_once 'views/user/index.php';
		
	}
	public function vista (){
		require_once 'views/layouts/Html.php';
		require_once 'views/layouts/usuario.php';
	}

	//public function create (){
	
	//	require_once 'views/layouts/header.php';
	//	require_once 'views/user/create.php';



	//}
	public function store (){

		$_POST['pass'] = password_hash($_POST['pass'], PASSWORD_DEFAULT);
	
		$path = 'assets/img/' . $_FILES['url_image']['name'];
		var_dump(move_uploaded_file($_FILES['url_image']['tmp_name'], $path));
		$_POST['url_image'] = $path;

	   
		echo parent::register($_POST) ? header('location:?controller=User') : 'Error en el registro';
		
    }
    public function storeDoctor(){
		$_POST['pass'] = password_hash($_POST['pass'], PASSWORD_DEFAULT);
			
		$path = 'assets/img/' . $_FILES['url_image']['name'];
		var_dump(move_uploaded_file($_FILES['url_image']['tmp_name'], $path));
		$_POST['url_image'] = $path;

		echo parent::register_doctor($_POST) ? header('location:?controller=User&method=usuarios') : 'Error en el registro';
    }

	public function edit(){
		$busqueda = parent::find_user($_GET['id_usuario']);
        require_once 'views/layouts/body.php';
        require_once 'views/user/edit.php';
      
	}
    public function update(){

		$url_path = 'assets/img/' . $_FILES['url_image']['name'];
		var_dump(move_uploaded_file($_FILES['url_image']['tmp_name'], $url_path));
		$_POST['url_image'] = $url_path;

        echo parent::update_register($_POST) ? header('location:?controller=user&method=usuarios') : 'Error en actualizar datos';
    }

	public function delete(){
	$user = parent::deleteUsuario($_GET['id_usuario']);
	}

}
?>