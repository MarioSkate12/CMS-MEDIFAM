<h2>Citas</h2>
<div class="mani">

<a class="CITAS" href="?controller=cita&method=consult">VER CITAS</a>
<a class="CITAS" href="?controller=cita&method=create">SOLICITAR CITAS</a>
<a class="navbar" href="?controller=user&method=vista">VOLVER</a>
</div>


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
           

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

