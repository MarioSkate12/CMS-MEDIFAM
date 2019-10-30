<div class="compilar">
<a class="create" href="?controller=user&method=usuarios"> EDITAR USUARIOS</a>
<a class="create" href="?controller=user&method=Doctores">CREAR DOCTOR</a>
<a class="create" href="?controller=cita&method=citas">EDITAR CITAS</a>
</div>
	<center><form class="for" action="?controller=user&method=storeDoctor" method="POST"  enctype="multipart/form-data">
		
<h2>CREAR DOCTORES</h2>

       
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
            <label for="url_image"></label>
            <input type="file" name="url_image" id="url_image">
    </section>
<br>

<input class="boton" type="submit" value="Registrar">

<div class="recoger">
<a  href="?controller=user&method=usuarios">Volver</a>
</div>

	</form></center>
