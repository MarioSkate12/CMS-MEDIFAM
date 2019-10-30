<?php

class securityController extends Security {

    public function login(){
        $user = parent::validateLogin($_POST['documento']);

        if(!is_object($user)) die('Error al ingresar.');

        if(password_verify($_POST['pass'], $user->pass)){

           // $_SESSION['user'] = $user;

            //switch ($user->id_rol) {

                $_SESSION['user'] = $user;
                switch ($_SESSION['user']->id_rol){
                case 1:
                    echo "Eres Administrador";
                    header("location:?controller=user&method=usuarios");
                    break;
                case 2:
                    echo "Eres Doctor";
                    header("location:?controller=cita&method=doctor");
                    break;
                case 3:
                    echo "Eres Usuario";
                    header("location:?controller=user&method=vista");
                    break;
            }


        }else{
        ?>
        <script>
            alert('Contraseña Incorrecta');
            window.location.href='?method=login';
        </script>
        <?php
        }

    }


    public function logout(){
        unset($_SESSION['user']);
        session_destroy();
        header('location:?controller=index');
    }

}