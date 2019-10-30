<h2>Citas</h2>
<div class="mani">

<a class="CITAS" href="?controller=user&method=vista">VER CITAS</a>
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
  <tr>
            <td><?= $il->id_solicitud ?></td>
            <td><?= $il->tipo_desc ?></td>
            <td><?= $il->documento ?></td>
            <td><?= $il->Nombre ?></td>
            <td><?= $il->Apellido ?></td>
            <td><?= $il->fecha ?></td>
            <td><?= $il->Hora ?></td>
            <td><?= $il->des_centro ?></td>
            <td><?= $il->des_especial ?></td>
           

            </td>
        </tr>
</tbody>
