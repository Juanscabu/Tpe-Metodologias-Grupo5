 {include 'templates/header.tpl'}
  <slide>
 <table class="table table-hover">
        <tr>
          <td>Nro Vuelo</td>
          <td>Ciudad Origen</td>
          <td>Ciudad Destino</td>
          <td>Fecha Salida</td>
          <td>Fecha Llegada</td>
        </tr>
    {foreach  from=$vuelos item=$vuelo}
        <tr>
          <td>{$vuelo->nro_vuelo}</td>
          <td>{$vuelo->ciudad_origen}</td>
          <td>{$vuelo->ciudad_destino}</td>
           <td>{$vuelo->fecha_salida}</td>
            <td>{$vuelo->fecha_llegada}</td>
        </tr>
    {/foreach}
</table>
 </slide>
{include 'templates/footer.tpl'}