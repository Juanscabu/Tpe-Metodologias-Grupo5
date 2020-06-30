 {include 'templates/header.tpl'}
  <slide>
 <table class="table table-hover">
    <a href="addVuelo/{$id}" class="btn btn-primary">Agregar</a>
        <tr>
          <td>Nro Vuelo</td>
          <td>Compañia</td>
          <td>Puerta</td>
          <td>Asiento Singles</td>
          <td>Aeropuerto Origen</td>
          <td>Aeropuerto Destino</td>
          <td>Ciudad Origen</td>
          <td>Ciudad Destino</td>
          <td>País Origen</td>
          <td>País Destino</td>
          <td>Fecha Salida</td>
          <td>Fecha Llegada</td>
          <td>Reserva</td>
          <td>Tiempo Escalas</td>
          <td>Agent Id</td>
          <td>Cantidad de Pasajeros</td>
          <td>Cantidad de Valijas</td>
          <td>Peso Máximo</td>
        </tr>
    {foreach  from=$vuelos item=$vuelo}
        <tr>
          <td>{$vuelo->nro_vuelo}</td>
          <td>{$vuelo->compañia}</td>
          <td>{$vuelo->puerta}</td>
          <td>{$vuelo->asiento}</td>
          <td>{$vuelo->aeropuerto_origen}</td>
          <td>{$vuelo->aeropuerto_destino}</td>
          <td>{$vuelo->ciudad_origen}</td>
          <td>{$vuelo->ciudad_destino}</td>
          <td>{$vuelo->pais_origen}</td>
          <td>{$vuelo->pais_destino}</td>
          <td>{$vuelo->fecha_salida}</td>
          <td>{$vuelo->fecha_llegada}</td>
          <td>{$vuelo->reserva}</td>
          <td>{$vuelo->tiempo_escalas}</td>
          <td>{$vuelo->Agent_Id}</td>
          <td>{$vuelo->cant_pasajeros}</td>
          <td>{$vuelo->cant_valijas}</td>
          <td>{$vuelo->peso_maximo}</td>
        </tr>
    {/foreach}
</table>
 </slide>
{include 'templates/footer.tpl'}