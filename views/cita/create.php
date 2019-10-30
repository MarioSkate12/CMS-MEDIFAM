
<div class="mani">
<a class="CITAS" href="?controller=cita&method=create">SOLICITAR CITAS</a>
<a class="CITAS" href="?controller=cita&method=consultind&usuario_id=<?= $_SESSION['user']->id_usuario;?>">VER CITAS</a>
<a class="navbar" href="?controller=user&method=vista">VOLVER</a>
</div>
	<center><form class="for" action="?controller=cita&method=store" method="POST">
		
<h2>SOLICITAR CITAS</h2>
<input type="hidden" name="id_usuario" value="<?= $_SESSION['user']->id_usuario;  ?>">
       
		<select class="select" name="tipo_id">
			<option class="" value="0">seleccionar</option>
			<option class="" value="1">Registro civil</option>
			<option class="" value="2">Tarjeta de identidad</option>
			<option class="" value="3">Cedula Ciudadania</option>
			<option class="" value="4">Cedula Extranjera</option>
			
		</select><br>

<input type="number" required name="documento" placeholder="Numero de identificacion" value="">

<input type="text" required name="Nombre" placeholder="Nombre" value="">

<input type="text" required name="Apellido" placeholder="Apellido" value="">

<input type="date" required name="fecha" placeholder="Fecha" value="">

<input type="time" required name="Hora" placeholder="Hora" value="">

	<select class="select" name="id_centro">
			<option class="" value="0">seleccionar</option>
			<option class="" value="1">Kennedy</option>
			<option class="" value="2">Floresta</option>
			<option class="" value="3">Soacha</option>
			<option class="" value="4">Calle 90</option>
			<option class="" value="5">Facatativa</option>
			<option class="" value="6">Suba</option>
			<option class="" value="7">Calle 51</option>
			<option class="" value="8">Calle 48</option>
		    <option class="" value="9">Chía</option>
			
		</select><br>

	<select class="select" name="id_especial">
			<option class="" value="0">seleccionar</option>
			<option class="" value="1">Odontologia</option>
			<option class="" value="2">Medicina General</option>
			<option class="" value="3">Pediatria</option>
		
			
		</select><br>


<br>

<input class="boton" type="submit" value="SOLICITAR">

<div class="recoger">
<a  href="?controller=user&method=vista">Volver</a>
</div>

	</form></center>

	