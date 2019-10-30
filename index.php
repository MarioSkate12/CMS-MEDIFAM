<?php
session_start();

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$method = isset($_GET['method']) ? $_GET['method'] : 'index';



spl_autoload_register(function($class){
    if(file_exists("controllers/{$class}.php")){
        require_once "controllers/{$class}.php";
    }else if(file_exists("models/{$class}.php")){
        require_once "models/{$class}.php";
    }else{
         ?>
        <script>
            window.location.href='?controller=index';
        </script>
        <?php
    }
});

$controller = "{$controller}Controller" ;
$controller = new $controller();

if(call_user_func([$controller, $method])){
	  ?>
        <script>
            window.location.href='?method=index';
        </script>
        <?php
}


//require_once 'models/Database.php';
//require_once 'models/User.php';
//require_once 'models/Security.php';
//require_once 'models/cita.php';


//require_once 'controllers/indexController.php';
//require_once 'controllers/userController.php';
//require_once 'controllers/securityController.php';
//require_once 'controllers/citaController.php';





//$controller = "{$controller}Controller";
//$controller = new $controller();


//call_user_func([$controller,$method ]);