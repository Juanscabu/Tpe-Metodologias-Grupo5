 {include 'templates/header.tpl'}
  <slide>
 <table class="table table-hover">
    <a href="addAlojamiento/{$id}" class="btn btn-primary">Agregar</a>
        <tr>
          <td>Hotel</td>
          <td>Personas</td>
          <td>Habitaciones</td>
          <td>Habitacion Singles</td>
          <td>Habitacion Dobles</td>
          <td>Servicio</td>
          <td>Fecha Ingreso</td>
          <td>Fecha Egreso</td>
        </tr>
    {foreach  from=$alojamientos item=$alojamiento}
        <tr>
          <td>{$alojamiento->hotel}</td>
          <td>{$alojamiento->cantidad_personas}</td>
          <td>{$alojamiento->cantidad_habitaciones}</td>
          <td>{$alojamiento->single}</td>
          <td>{$alojamiento->doble}</td>
          <td>{$alojamiento->servicio}</td>
          <td>{$alojamiento->fecha_ingreso}</td>
          <td>{$alojamiento->fecha_egreso}</td>
        </tr>
    {/foreach}
</table>
 </slide>
{include 'templates/footer.tpl'}