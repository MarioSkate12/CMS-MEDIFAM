<link rel="stylesheet" type="text/css" href="assets/css/style_login.css">
<?php if(isset($_SESSION['flash']['message'])) echo $_SESSION['flash']['message']; ?>
<center> <form class="casilla" action="?controller=security&method=login" method="POST">

		<h2>INICIAR SESIÓN</h2>
		<input type="number" required name="documento" placeholder="Numero de identificacion" value=""><br>

		<input type="password" required name="pass" placeholder="*************"value=""><br>

		<input class="Ingresar" type="submit" value="Ingresar">
<div class="registrar">
  <a href="?method=create">REGISTRATE AQUI</a>
</div>
	</form></center>