<h2>Citas</h2>
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
        <th>Fecha</th>
        <th>Hora</th>
        <th>Centro de Salud</th>
        <th>Especialidad</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all_citas() as $cita):  ?>
        <tr>
            <td><?= $cita->id_solicitud ?></td>
            <td><?= $cita->tipo_desc ?></td>
            <td><?= $cita->documento ?></td>
            <td><?= $cita->Nombre ?></td>
            <td><?= $cita->Apellido ?></td>
            <td><?= $cita->fecha ?></td>
            <td><?= $cita->Hora ?></td>
            <td><?= $cita->des_centro ?></td>
            <td><?= $cita->des_especial ?></td>
            <td width="200" class="table__options">
                <a href="?controller=cita&method=edit&id_solicitud=<?= $cita->id_solicitud ?>">
                    <button class="editar-green">Editar</button>
                </a>
                <a href="?controller=cita&method=delete&id_solicitud=<?= $cita->id_solicitud ?>">
                <button class="borrar-black">Borrar</button>
                </a>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
