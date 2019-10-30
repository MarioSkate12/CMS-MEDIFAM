<?php ($_SESSION['user']);?>
<!DOCTYPE html>
<html>
<head>
	<title>MEDIFAM</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style_doctor.css">
     <link rel="shortcut icon" type="icon" href="assets/img/LOGOO.ico">
</head>

<body>


	
	<div class="contenedor">
	<header class="largo">
	<img class="logo" src="assets/img/logo4.png">
	<a href="#">Doctor </a>

<div id="url_image">
    <img src="<?= $_SESSION['user']->url_image; ?>">
</div>

	<a href="#"><?= $_SESSION['user']->nombres; ?></a>


<div id="lagout">
	<a href="?controller=security&method=logout">CERRAR SESIÓN</a>
</div>
	</header>
    </div>
</body>





