<h2>Lista de usuarios</h2>

<a class="create" href="?controller=user&method=usuarios"> EDITAR USUARIOS</a>
<a class="create" href="?controller=user&method=Doctores">CREAR DOCTOR</a>
<a class="create" href="?controller=cita&method=citas">EDITAR CITAS</a>

<table class="table">
    <thead>
        <th>id</th>
        <th>Tipo</th>
        <th>Documento</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Ciudad</th>
        <th>Direccion</th>
        <th>Imagen</th>
        <th>rol</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $user):  ?>
        <tr>
            <td><?= $user->id_usuario ?></td>
            <td><?= $user->des_tipo ?></td>
            <td><?= $user->documento ?></td>
            <td><?= $user->nombres ?></td>
            <td><?= $user->apellidos ?></td>
            <td><?= $user->ciudad ?></td>
            <td><?= $user->direccion ?></td>
            <td><img class="url_perfil" src="<?=$user->url_image ?>" width="110px" height="110px"></td>
            <td><?= $user->des_rol ?></td>
            <td width="200" class="table__options">
                <a href="?controller=user&method=edit&id_usuario=<?= $user->id_usuario ?>">
                    <button class="editar-green">Editar</button>
                </a>
                <a href="?controller=user&method=delete&id_usuario=<?= $user->id_usuario ?>">
                <button class="borrar-black">Borrar</button>
                </a>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
