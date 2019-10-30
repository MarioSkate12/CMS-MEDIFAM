
<div class="contenedor">
<img class="medica" src="assets/img/doctor.jpg" height="500px" width="650px">
	<center><form class="formulario" action="?controller=user&method=store" method="POST"  enctype="multipart/form-data">
		
<h2>REGISTRO DE USUARIOS</h2>

       
		<select class="select" name="id_tipo">
			<option class="" value="0">seleccionar</option>
			<option class="" value="1">Registro civil</option>
			<option class="" value="2">Tarjeta de identidad</option>
			<option class="" value="3">Cedula Ciudadania</option>
			<option class="" value="4">Cedula Extranjera</option>
			
		</select><br>



<input type="number" required name="documento" placeholder="Numero de identificacion" value="">

<input type="text" required name="nombres" placeholder="Nombre" value="">

<input type="text" required name="apellidos" placeholder="Apellido" value="">

<input type="text" required name="ciudad" placeholder="Ciudad" value="">

<input type="text" required name="direccion" placeholder="Direccion" value=""><br>

<input type="password" required name="pass" placeholder="**************" value=""><br><br>

	<section class="form-group">
            <label for="url_image">Image de Perfil</label>
            <input type="file" name="url_image" id="url_image">
    </section>
<br>
<input class="boton" type="submit" value="Registrarse">

<div class="recoger">
<a  href="?controller=index">Volver</a>
</div>

	</form></center>
	</div>