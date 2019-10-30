
<div class="compilar">
<a class="create" href="?controller=user&method=usuarios"> EDITAR USUARIOS</a>
<a class="create" href="?controller=user&method=Doctores">CREAR DOCTOR</a>
<a class="create" href="?controller=cita&method=citas">EDITAR CITAS</a>
</div>

	<center><form class="for" action="?controller=user&method=update" method="POST"  enctype="multipart/form-data">

<h3>EDITAR USUARIOS</h3>

<input type="hidden" name="id_usuario" value="<?= $busqueda->id_usuario ?>">

<input type="number" required name="documento" placeholder="Numero de identificacion" value="<?= $busqueda->documento?>">

<input type="text" required name="nombres" placeholder="Nombre" value="<?= $busqueda->nombres ?>">

<input type="text" required name="apellidos" placeholder="Apellido" value="<?= $busqueda->apellidos ?>">

<input type="text" required name="ciudad" placeholder="Ciudad" value="<?= $busqueda->ciudad ?>">

<input type="text" required name="direccion" placeholder="Direccion" value="<?= $busqueda->direccion ?>"><br><br><br>

<section class="form-group">
            <label for="url_image">Image</label>
            <input type="file" name="url_image" id="url_image" value="<?= $busqueda->url_image ?>">
    </section>
<br>

<input class="boton" type="submit" value="Update">

<div class="recoger">
<a  href="?controller=user&method=usuarios">Volver</a>
</div>

	</form></center>
	