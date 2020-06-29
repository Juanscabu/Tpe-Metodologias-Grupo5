{include 'templates/header.tpl'}
    <slide>
    <h1>Viajes en curso</h1>
        <table class="table table-hover">
        <tr>
          <td>Nombre</td>
           <td>Nro Vuelo</td>
            <td>Compañia</td>
           <td>Origen</td>
            <td>Destino</td>
          <td>Fecha Inicio</td>
          <td>Fecha Fin</td>
          <td>Alojamiento</td>
          <td>Vuelos</td>
        </tr>
    {foreach  from=$viajes item=$viaje}
      {if $viaje->fecha_fin > 2020-12-31}
        <tr>
          <td>{$viaje->nombre}</td>
          <td>{$viaje->nro_vuelo}
          <td>{$viaje->compania}
          <td>{$viaje->ciudad_origen}</td>
           <td>{$viaje->ciudad_destino}</td>
          <td>{$viaje->fecha_inicio}</td>
          <td>{$viaje->fecha_fin}</td>
          <td><a href="mostrarAlojamientos/{$viaje->id_viaje}" class="btn btn-primary">Alojamientos</a>
          <td><a href="mostrarVuelos/{$viaje->id_viaje}" class="btn btn-primary">Vuelos</a>
        </tr>
        {/if}
    {/foreach}
    </table>
     <h1>Viajes ya realizados</h1>
        <table class="table table-hover">
        <tr>
          <td>Nombre</td>
           <td>Nro Vuelo</td>
            <td>Compañia</td>
           <td>Origen</td>
            <td>Destino</td>
          <td>Fecha Inicio</td>
          <td>Fecha Fin</td>
          <td>Alojamiento</td>
          <td>Vuelos</td>
            {foreach  from=$viajes item=$viaje}
        <tr>
        {if $viaje->fecha_fin < 2021-12-31}
          <td>{$viaje->nombre}</td>
          <td>{$viaje->nro_vuelo}
          <td>{$viaje->compania}
          <td>{$viaje->ciudad_origen}</td>
           <td>{$viaje->ciudad_destino}</td>
          <td>{$viaje->fecha_inicio}</td>
          <td>{$viaje->fecha_fin}</td>
          <td><a href="mostrarAlojamientos/{$viaje->id_viaje}" class="btn btn-primary">Alojamientos</a>
          <td><a href="mostrarVuelos/{$viaje->id_viaje}" class="btn btn-primary">Vuelos</a>
        </tr>
        </tr>
        {/if}
          {/foreach}
</table>
    </slide>
{include 'templates/footer.tpl'}

