<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/style_usuario.css">
	<title>Usuario</title>
</head>
<body>

<section class="container">

	<div class="OFA">
		<a href="?controller=cita&method=create"><img src="assets/img/cita.png" ></a>
		<a href="?controller=cita&method=create">SOLICITA TU CITA</a>
	</div>

	<div class="OFA">
		<a href="?controller=cita&method=consultind&usuario_id=<?= $_SESSION['user']->id_usuario;?>"><img src="assets/img/buscar.png" ></a>
		<a href="?controller=cita&method=consultind&usuario_id=<?= $_SESSION['user']->id_usuario;?>">VER CITAS</a>
	</div>


</section>

</body>
</html>