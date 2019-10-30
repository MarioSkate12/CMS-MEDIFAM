


	<center><form class="for" action="?controller=cita&method=update" method="POST">
		
<h2>Editar Citas</h2>

       
		<select class="select" name="tipo_id" value="<?= $cita->tipo_id ?>">
			<option class="" value="0">seleccionar</option>
			<option class="" value="1">Registro civil</option>
			<option class="" value="2">Tarjeta de identidad</option>
			<option class="" value="3">Cedula Ciudadania</option>
			<option class="" value="4">Cedula Extranjera</option>
			
		</select><br>

<input type="hidden" name="id_solicitud" value='<?=$cita->id_solicitud?>'>
<input type="number" name='documento' required placeholder="Numero de identificacion" value="<?= $cita->documento ?>">

<input type="text" required name="Nombre" placeholder="Nombre" value="<?= $cita->Nombre ?>">

<input type="text" required name="Apellido" placeholder="Apellido" value="<?= $cita->Apellido ?>">

<input type="date" required name="fecha" placeholder="Fecha" value="<?= $cita->fecha ?>">

<input type="time" required name="Hora" placeholder="Hora" value="<?= $cita->Hora ?>">

	<select class="select" name="id_centro" value="<?= $cita->id_centro ?>">
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

	<select class="select" name="id_especial" value="<?= $cita->id_especial ?>">
			<option class="" value="0">seleccionar</option>
			<option class="" value="1">Odontologia</option>
			<option class="" value="2">Medicina General</option>
			<option class="" value="3">Pediatria</option>
		
			
		</select><br>


<br>

<input class="boton" type="submit" value="ACTUALIZAR">

<div class="recoger">
<a  href="?controller=cita&method=citas">Volver</a>
</div>

	</form></center>
	