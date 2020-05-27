 {include 'templates/header.tpl'}
  <slide>
 <table class="table table-bordered table-dark">
    <a href="addAlojamiento/{$id}" class="btn btn-primary">Agregar</a>
        <tr>
          <td>Hotel</td>
          <td>Fecha Ingreso</td>
          <td>Fecha Egreso</td>
        </tr>
    {foreach  from=$alojamientos item=$alojamiento}
        <tr>
          <td>{$alojamiento->hotel}</td>
          <td>{$alojamiento->fecha_ingreso}</td>
          <td>{$alojamiento->fecha_egreso}</td>
        </tr>
    {/foreach}
</table>
 </slide>
{include 'templates/footer.tpl'}