{include 'templates/header.tpl'}
    <slide>
    <h1>Viajes en curso</h1>
        <table class="table table-hover">
        <tr>
          <td>nombre</td>
          <td>Fecha Inicio</td>
          <td>Fecha Fin</td>
          <td>Alojamiento</td>
        </tr>
    {foreach  from=$viajes item=$viaje}
        <tr>
          <td>{$viaje->nombre}</td>
          <td>{$viaje->fecha_inicio}</td>
          <td>{$viaje->fecha_fin}</td>
          <td><a href="mostrarAlojamientos/{$viaje->id_viaje}" class="btn btn-primary">Alojamientos</a>
        </tr>
    {/foreach}
</table>
    </slide>
{include 'templates/footer.tpl'}

