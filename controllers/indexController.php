<?php
class indexController {

    public function __construct(){
  
    }

	public function index (){
	require_once 'views/layouts/header.php';
	require_once 'views/layouts/footer.php';	
} 





public function create (){
require_once 'views/layouts/header.php';
require_once 'views/user/create.php';

    	
}



public function edit (){

}



public function update (){

}

public function delete () {

   	
   }
public function login(){
require_once 'views/layouts/header.php';
require_once 'views/index/login.php';
   }


}
?>