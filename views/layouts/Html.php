<?php ($_SESSION['user']);?>
<!DOCTYPE html>
<html>
<head>
	<title>MEDIFAM</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style_body.css">
     <link rel="shortcut icon" type="icon" href="assets/img/LOGOO.ico">
</head>

<body>


	
	<div class="contenedor">
	<header class="largo">
	<img class="logo" src="assets/img/logo4.png">
	<a href="#">Usuario </a>

<div id="url_image">
    <img src="<?= $_SESSION['user']->url_image;  ?>" width="100px" height="100px">
</div>

	<a href="#"><?= $_SESSION['user']->nombres; ?> <?= $_SESSION['user']->apellidos; ?></a>


<div id="lagout">
	<a href="?controller=security&method=logout">CERRAR SESIÓN</a>
</div>
	</header>
    </div>


</body>


